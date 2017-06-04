(function($){function Suggest(e,t){this._dom=e,this.init(t)}window.JSON||(window.JSON={parse:function(sJSON){return eval("("+sJSON+")")},stringify:function(){var e=Object.prototype.toString,t=Array.isArray||function(t){return e.call(t)==="[object Array]"},n={'"':'\\"',"\\":"\\\\","\b":"\\b","\f":"\\f","\n":"\\n","\r":"\\r","	":"\\t"},r=function(e){return n[e]||"\\u"+(e.charCodeAt(0)+65536).toString(16).substr(1)},i=/[\\"\u0000-\u001F\u2028\u2029]/g;return function s(n){if(n==null)return"null";if(typeof n=="number")return isFinite(n)?n.toString():"null";if(typeof n=="boolean")return n.toString();if(typeof n=="object"){if(typeof n.toJSON=="function")return s(n.toJSON());if(t(n)){var o="[";for(var u=0;u<n.length;u++)o+=(u?", ":"")+s(n[u]);return o+"]"}if(e.call(n)==="[object Object]"){var a=[];for(var f in n)n.hasOwnProperty(f)&&a.push(s(f)+": "+s(n[f]));return"{"+a.join(", ")+"}"}}return'"'+n.toString().replace(i,r)+'"'}}()}),String.prototype.camelize=function(){return this.replace(/\-(\w)/ig,function(e,t){return t.toUpperCase()})},String.prototype.stripTags=function(){return(this||"").replace(/<[^>]+>/g,"")};var noEventKeycode=[9,16,17,18,19,20,33,34,35,36,37,39,41,42,43,45,47],getConstructorName=function(e){return e!=null&&e.constructor!=null?Object.prototype.toString.call(e).slice(8,-1):""},mix=function(e,t,n){if(getConstructorName(t)=="Array"){for(var r=0,i=t.length;r<i;r++)mix(e,t[r],n);return e}if(typeof n=="function")for(r in t)e[r]=n(e[r],t[r],r);else for(r in t)if(n||!(e[r]||r in e))e[r]=t[r];return e},camelize=function(e){return e.replace(/_/g,"-").camelize()},genDomId=function(){var e=+(new Date);return function(){return++e}}();Suggest.prototype={dataUrl:"",curIndex:0,suggestData:{},prefixProtected:!0,lazySuggestTime:100,minWordLength:0,itemSelectors:"li.fold-item",itemHoverStyle:"fold-hover",itemFakeClass:"fake",itemNoneClass:"error",posAdjust:{},getDataFun:"jsonp",remoteCall:"baidu.sug",remoteCallCharset:"gbk",remoteCallExpire:0,autoFixListPos:!0,autoSubmit:!1,suggestProtectedTimer:!1,invalidWords:{},history:{},inputWord:"",isAutoOppDir:!0,emptyPrompt:!1,trimKW:!1,recommendFun:function(){},_parsing:0,_suggestTimer:0,init:function(e){var t={};this._dom.attr("autocomplete","off"),this.suggestList=$('<ul id="search-suggest-'+genDomId()+'" class="__mall_suggest__"></ul>');for(var n in e){var r=e[n],i=camelize(n);t[i]=r}mix(this,t,1),!this.renderDataFun&&(this.renderDataFun=this._defaultRenderDataFun),!this.fillDataFun&&(this.fillDataFun=this._defaultFillDataFun),this.customClass&&this.suggestList.addClass(this.customClass),$("body").append(this.suggestList),this._bindEvent()},hideList:function(){if(this.suggestList.is(":visible")){var e=new $.Event("afterhide");this.suggestList.hide(),this._fixPos(!1),this.curIndex=0,this._stop();if($(this).trigger(e)===!1)return!1}},getDom:function(){return this._dom},getSuggestData:function(e){return e==undefined&&(e=this._dom.val()),"undefined"!=typeof this.history[e]?this.history[e]:{}},genDomId:function(){return genDomId()},_start:function(){var e=this;clearInterval(this._suggestTimer),this._suggestTimer=setInterval(function(){word=$(e._dom).val(),e.trimKW&&(word=$.trim(word.trim));if(e.inputWord!=word){if($(e).trigger("beforesuggest")===!1)return!1;e.inputWord=word,e._doGetData(word)}},e.lazySuggestTime)},_stop:function(){clearInterval(this._suggestTimer)},_isValidWord:function(e){return e.length>50?!1:this.invalidWords[e]?!1:!0},_parseData:function(e,t){var n={},r,i=this;try{n=JSON.parse(t)}catch(s){}r=JSON.stringify(n),this._initList(n),r==="{}"||r==="[]"?i.emptyPrompt||(this.invalidWords[e]=1,this.hideList()):this.history[e]=t,this._parsing=0;if($(this).trigger("aftersuggest")===!1)return!1},_initList:function(e){var t=[],n=this._dom.val();this.trimKW&&(n=$.trim(n)),this._fixPos(!0),t.push(this.renderDataFun(n,e)),this.suggestList.html(t.join("")).show(),this._dealwithListDirection()},_defaultFillDataFun:function(e){this._dom.val($(e).html().stripTags())},_defaultRenderDataFun:function(e,t){var n=[],r;n.push('<li class="fold-bg"></li>');for(var i=0;i<t.length;++i)r=t[i].replace(e,"<em class='red'>"+e+"</em>"),n.push('<li class="fold-item"><span class="title">'+r+"</span></li>");return n.join("")},_doGetData:function(e){var t=this,n;if(""==$.trim(e))return this.hideList(),!1;if(this.prefixProtected&&!t._isValidWord(e))return this.hideList(),!1;if(e.length<t.minWordLength)return this.hideList(),!1;n=function(){var e=this._parsing;if(!e)return;var t=+(new Date);t-e>2e3&&(this._parsing=0)},t._parsing&&n.apply(this);if(!t._parsing){t._parsing=+(new Date),setTimeout(function(){n.apply(t)},2e3);if(t.history[e])t._parseData(e,t.history[e]);else if(this.dataUrl||!this.dataUrl&&this.getDataFun=="data_provider_byword"){var r=t.dataUrl.replace(/%KEYWORD%/,encodeURIComponent(e)),i=function(e){typeof e=="string"&&(e=JSON.parse(e));var n=$.Event("aftergetdata");n.rawdata=e;var r=$(t).triggerHandler(n);return r===!1?!1:n.rawdata};if(this.getDataFun=="ajax")$.ajax({url:'http://alalei.com/home/search/ajax',type:"get",data:""}).then(function(n){n=i.call(t,n);if(n===!1)return!1;t._parseData(e,JSON.stringify(n))});else if(this.getDataFun=="jsonp")$.ajax({url:'http://alalei.com/home/search/ajax',dataType:"jsonp"}).then(function(n){n=i.call(t,n);if(n===!1)return!1;t._parseData(e,JSON.stringify(n))});else if(this.getDataFun=="data_provider")r=r.replace(/%callbackfun%/,"callbackfun"),this.dataProvider.call(t,r,function(n){n=i.call(t,n);if(n===!1)return!1;t._parseData(e,JSON.stringify(n))});else if(this.getDataFun=="data_provider_byword")this.dataProvider.call(t,e,function(n){n=i.call(t,n);if(n===!1)return!1;t._parseData(e,JSON.stringify(n))});else if(this.getDataFun=="remotejs"){var s=t.remoteCall.split("."),o=s.length,u={},a="";if(o<1)return;u[s[o-1]]=function(n){n=i.call(t,n);if(n===!1)return!1;t._parseData(e,JSON.stringify(n))};for(var f=o-2;f>=0;--f)u[s[f]]=u[s[f]]||{},u[s[f]][s[f+1]]=u[s[f+1]];o==1?window[s[0]]=window[s[0]]||u[s[0]]||{}:(window[s[0]]=window[s[0]]||{},window[s[0]][s[1]]=u[s[1]]),t.remoteCallExpire&&(a=Math.floor(+(new Date)/1e3/t.remoteCallExpire),/\?/.test(r)?a="&_t="+a:a="?_t="+a),$.getScript(r+a,function(){},{charset:t.remoteCallCharset})}else this.getDataFun=="remoteparam"&&getScript(r,function(){var n=window[t.remoteCall];n=i.call(t,n);if(n===!1)return!1;t._parseData(e,JSON.stringify(n))},{charset:t.remoteCallCharset})}else t._parseData(e,t.suggestData)}},_submitMe:function(e){var t=this,n,r;$(e).removeClass(t.itemHoverStyle),$(e).hasClass(t.itemFakeClass)||t.hideList(),t.fillDataFun(e),t.autoSubmit&&(r=$(t._dom[0].form),n=r.trigger("submit"),n&&r.submit()),$.trim(t._dom.val())!=""&&(t.inputWord=$(t._dom).val())},_bindEvent:function(){var e=this;this._dom.on("blur",function(){e._stop()}),this._dom.on("keyup",function(t){var n=t.keyCode;n!=38&&n!=40&&n!=13&&(e.curIndex=0)}),this._dom.on("paste",function(t){e._start()}),this._dom.on("click",function(t){e._stop(),e._dom.val()==""&&e.recommendFun.call(e)}),this._dom.on("keydown",function(t){var n=t.keyCode;if(n>111&&n<138)return;if($.inArray(n,noEventKeycode)!=-1)return;if(n==27){e.hideList();return}if(n==13){e.curIndex!=0&&(e.hideList(),e.autoSubmit||t.preventDefault());return}if(n==38||n==40){e._stop();var r=e.suggestList.find(e.itemSelectors).length;if(r){++r;if(n==38){e.curIndex=(e.curIndex-1+r)%r;var i=e.suggestList.find(e.itemSelectors).eq(e.curIndex-1);i&&i.hasClass(e.itemFakeClass)&&(e.curIndex=(e.curIndex-1+r)%r)}else if(n==40){e.curIndex=(e.curIndex+1+r)%r;var i=e.suggestList.find(e.itemSelectors).eq(e.curIndex-1);i&&i.hasClass(e.itemFakeClass)&&(e.curIndex=(e.curIndex+1+r)%r)}if(e.curIndex==0)e._dom.val(e.inputWord),e.suggestList.find(e.itemSelectors).removeClass(e.itemHoverStyle);else{var s=e.suggestList.find(e.itemSelectors)[e.curIndex-1],o=new $.Event("beforechoose"),u=new $.Event("afterchoose");o.selectedDom=s,u.selectedDom=s;if($(e).triggerHandler(o)===!1)return!1;e.suggestList.show(),e._dealwithListDirection(),e.fillDataFun(s),e.suggestList.find(e.itemSelectors).removeClass(e.itemHoverStyle),$(s).addClass(e.itemHoverStyle);if($(e).triggerHandler(u)===!1)return!1}}t.preventDefault();return}e._start()}),e.suggestList.delegate("li","mouseover",function(){$(this).addClass(e.itemHoverStyle)}).delegate("li","mouseout",function(){$(this).removeClass(e.itemHoverStyle)}).delegate("li","click",function(){e._submitMe.apply(e,[this])}),$("body").on("click",function(t){var n=$(t.target).parents("li."+e.itemFakeClass);if(n.length>0&&$(t.target).parents(".suggest").attr("id")==e.suggestList.attr("id")){if(!n.hasClass(e.itemNoneClass)){var r=n.nextSibling("li:not(.fake)");e._dom.val(r.find(".sug-item").attr("data")),r.addClass(e.itemHoverStyle)}return!1}if($(t.target).is(e._dom))return!1;e.hideList(),e.curIndex=0}),$(window).on("resize",function(){var t;return function(){clearTimeout(t),t=setTimeout(function(){e.autoFixListPos&&e._resetPos()},100)}}())},_dealwithListDirection:function(){},_fixPos:function(){var e={},t=function(){var t=this._dom.offset(),n=e[this.suggestList.attr("id")];if(t.left!=n.left||t.top!=n.top||t.forid!=n.forid)this._resetPos(),n=t};return function(n){n&&this.autoFixListPos&&function(){var n=this.suggestList.attr("id"),r;e[n]||(r=this._dom.offset(),r.forid=n,e[n]=r,this._resetPos()),t.apply(this)}.call(this,arguments[0])}}.apply(this),_resetPos:function(){var e=this._dom.offset(),t=this.posAdjust,n=this._dom.width(),r=this._dom.height();e.bottom=e.top+r,e.right=e.left+n,this.suggestList.css({position:"absolute",top:(t.top?t.top+e.bottom:e.bottom)+"px",left:(t.left?t.left+e.left:e.left)+"px",width:(t.width?t.width+e.width:e.width)+"px","z-index":t["z-index"]?t["z-index"]:99},1),this._dealwithListDirection()}},window.MallSuggest=Suggest})(jQuery);