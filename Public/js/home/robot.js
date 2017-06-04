
/* @file robot.js
 * @date 2016.07.26 19:48:48 
 */
!function(a,b){var c=function(){};a.Robot=a.Class.create(),a.Robot.prototype={name:"Robot",options:null,callbackName:"",serviceRobot:"",hashSend:null,entityList:{"#":""},robotUserId:"",robotSessionID:"",sending:!1,postTimeID:null,initialize:function(b){var c=this;return this.hashSend=new a.HASH,this.callbackName="__robot_callback",this.data=a.store,this.options=a.extend({devicetype:a.browser.mobile?3:0,chattype:"0",chatvalue:"0"},b),a.CON_CUSTOMER_ID!==a.base.checkID(this.options.destid)&&(this.options.destid=this.options.siteid+"_ISME9754_T2D"+this.options.destid),this.serviceRobot=a.server.roboturl||"",window[this.callbackName]=function(b){try{b="string"==typeof b?a.JSON.parseJSON(b):b}catch(d){a.Log("Robot.callback:"+d.message,3)}c._handleResponse(b)},this.serviceRobot?((!this.options.machineID||this.options.machineID.length<=10)&&(this.options.machineID=this.data.get("machineid"),(!this.options.machineID||this.options.machineID.length<=10)&&(this.options.machineID=a.base._createScriptPCID())),this.data.set("machineid",this.options.machineID),this.options.userid||(this.options.userid=a.base.userIdFix+this.options.machineID.substr(0,21)),this.robotUserId=this.robotUserId||this.options.siteid+"_ISME9754_T2D_webbot",this.robotSessionID=this.robotSessionID||this.options.siteid+"_ISME9754_"+a.getTime(),void this.connect()):void a.Log("serviceRobot is null",3)},connect:function(){var b;b={data:{type:"open",siteId:this.options.siteid},clientid:this.options.machineID,callback:this.callbackName},a.require(this.serviceRobot+"?"+a.toURI(b)+"#rnd")},_handleResponse:function(b){if(b){a.Log("nTalk.Robot._handleResponse("+a.JSON.toJSONString(b)+")",1);var c,d=b.body;switch(b.type){case"sessionopen":c={status:1,nickname:a.lang.robot_name||"",userid:d.userId||"robotid",usericon:"",signature:"",sessionid:""},this.LoginResult(!0,0,c,d.sessionId,"",a.getTime());break;case"index":case"txt":this.remoteSendMessage(d);break;case"suggest":d.contents&&this.remoteSendSuggest(d);break;default:this.sendAbnormal(b)}}},LoginResult:function(b,c,d,e,f,g){if(this.login=b===!0,this.options.result=b===!0?1:0,this.options.clientid=c,this.options.sessionid=e,this.options.soid=f,this.options.time=g,"string"==typeof d)try{this.options.userinfo=a.JSON.parseJSON(d)}catch(h){}else this.options.userinfo=d||{};1===this.options.result&&(this.userinfo=a.extend({},{myuid:this.options.userid,myuname:this.options.username,signature:"",mylogo:this.options.userinfo.usericon,sessionid:this.robotSessionID,timesample:this.options.time}),this.flashGoURL=this.serviceRobot+"?"+a.toURI({data:{type:"close",sessionId:this.options.sessionid,siteId:this.options.siteid,userId:this.options.userinfo?this.options.userinfo.userid:""},clientid:this.options.machineID,callback:this.callbackName}),this._callback("fIM_setTChatGoServer",[this.flashGoURL])),this.processSessionIdle(),this._callback("fIM_tchatFlashReady",[this.options.userid,this.options.machineID,this.options.settingid]),this._callback("fIM_ConnectResult",[this.options.result,this.userinfo,""]),this._callback("fIM_notifyUserNumbers",[0]),this._callback("fIM_notifyUserList",[""])},remoteSendMessage:function(b){var c,d,e=a.getTime();b.content?d=b.content:(d=(a.lang.robot_question_tip||"")+"\r",a.each(b.contents,function(a,b){d+="[link robotindex="+(a+1)+"]"+(a+1)+". "+b+"[/link]\r"})),c={bold:"false",italic:"false",color:"000000",fontsize:"12",underline:"false",msg:d,msgid:e+"S",type:1,logo:"",userid:this.options.destid,name:"",timestamp:e},this.addPostMessage(c),this._callback("fIM_receiveMessage",[c])},remoteSendSuggest:function(a){a.contents&&a.contents.length&&this._callback("fIM_suggestMessage",[a.contents])},_callback:function(b,c){if(c.push(this.options.settingid),a.hasOwnProperty(b))try{a[b].apply(this,c)}catch(d){}else a.Log("nTalk."+b+"(...)",2)},sendMessage:function(b,c){var d,e,f=this;if(a.Log("nTalk.Robot.sendMessage()"),e=a.isObject(b)?b:a.JSON.parseJSON(b),1==e.type){e=a.extend({userid:this.options.userid,name:"",logo:""},e),this.hashSend.add(e.msgid,e);var g=function(a){a.error&&f.sendAbnormal(e.msgid)};this.addPostMessage(e),d={data:{type:e.botindex||"txt",siteId:this.options.siteid,sessionId:this.options.sessionid,userId:this.options.userinfo.userid||"",body:{content:this.charFilter(e.msg)}},clientid:this.options.machineID,callback:this.callbackName},this.processSessionIdle(),a.require(this.serviceRobot+"?"+a.toURI(d)+"#rnd",g)}},predictMessage:function(b){var c;a.Log('nTalk.Robot.predictMessage("'+b+'")'),b&&(c={data:{type:"suggest",siteId:this.options.siteid,sessionId:this.options.sessionid,userId:this.options.userinfo.userid||"",body:{content:this.charFilter(b)}},clientid:this.options.machineID,callback:this.callbackName},a.require(this.serviceRobot+"?"+a.toURI(c)+"#rnd"))},sendAbnormal:function(b){var c=this.hashSend.items(b),d=a.getTime(),e=a.extend({},{type:9,msgType:2,timesample:d,msgid:d+"J",userid:"system",body:c},c);this._callback("fIM_receiveMessage",[e])},closeTChat:function(){window[this.callbackName]=c},disConnect:function(){},processSessionIdle:function(){this.sessionIdleTimeouts||(this.sessionIdleTimeouts={});for(var a in this.sessionIdleReplys)this.sessionIdleTimeouts[a]&&clearTimeout(this.sessionIdleTimeouts[a]),this.sendIdleReply(a)},sendIdleReply:function(b){var c=this;this.sessionIdleTimeouts[b]=setTimeout(function(){var d=0,e=c.sessionIdleReplys[b];delete c.sessionIdleReplys[b];for(var f in c.sessionIdleReplys)"function"!=typeof c.sessionIdleReplys[f]&&d++;a.Log("setTimeout "+b+"s, disconnect tchat",1),0===d&&c.connect&&c.options.result&&(c.disconnect(),c._callback("fIM_ConnectResult",[4,"",e]))},1e3*b)},charFilter:function(b){var c,d,e=this,f=function(a){a=""+a;for(var b in e.entityList)"function"!=typeof e.entityList[b]&&(a=a.replace(new RegExp(""+b,"g"),e.entityList[b]));return a};if(a.isArray(b))for(c=[],d=0;d<b.length;d++)"object"==typeof b[d]?c[d]=a.charFilter(b[d]):"string"==typeof b[d]?c[d]=f(b[d]):c[d]=b[d];else if("object"==typeof b){c={};for(d in b)"function"!=typeof b[d]&&("object"==typeof b[d]?c[d]=a.charFilter(b[d]):"string"==typeof b[d]?c[d]=f(b[d]):c[d]=b[d])}else c=f(b);return c},addPostMessage:function(b){this.messageQueue||(this.messageQueue=new a.Queue),this.messageQueue.enQueue(b),this.postMCenter()},filterLink:function(a){return a.toString().replace(/\[\/?link(.*?)\]/gi,"")},postMCenter:function(){var b,c=this,d=a.server.mcenter+"message.php?m=Message&a=saveRobotMsg&ts="+a.getTime(),e={siteid:this.options.siteid,sessionid:this.robotSessionID,destid:this.robotUserId,myuid:this.options.userid,data:[]};return this.sending===!0||this.messageQueue.isEmpty()?void a.Log("sending or messageQueue.isEmpty"):(this.sending=!0,(b=this.messageQueue.deQueue())&&e.data.push({userid:b.userid==this.options.userid?b.userid:this.robotUserId,username:b.name,type:b.type,msgid:b.msgid,timestamp:b.timerkeyid||b.timestamp,msg:this.filterLink(b.msg)}),void(e.data.length&&(new a.POST(d,e,function(b){a.Log("send hidtory message complete"),clearTimeout(c.postTimeID),c.postTimeID=null,setTimeout(function(){c.sending=!1,c.postMCenter("complete")},50)}),this.postTimeID=setTimeout(function(){clearTimeout(c.postTimeID),c.postTimeID=null,c.sending=!1,c.postMCenter("timeout")},1e4))))}}};