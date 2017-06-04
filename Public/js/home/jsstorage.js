(function(){"use strict";function v(){var e=!1;if("localStorage"in window)try{window.localStorage.setItem("_tmptest","tmpval"),e=!0,window.localStorage.removeItem("_tmptest")}catch(t){}if(e)try{window.localStorage&&(i=window.localStorage,u="localStorage",l=i.jStorage_update)}catch(n){}else if("globalStorage"in window)try{window.globalStorage&&(window.location.hostname=="localhost"?i=window.globalStorage["localhost.localdomain"]:i=window.globalStorage[window.location.hostname],u="globalStorage",l=i.jStorage_update)}catch(r){}else{s=document.createElement("link");if(!s.addBehavior){s=null;return}s.style.behavior="url(#default#userData)",document.getElementsByTagName("head")[0].appendChild(s);try{s.load("jStorage")}catch(o){s.setAttribute("jStorage","{}"),s.save("jStorage"),s.load("jStorage")}var a="{}";try{a=s.getAttribute("jStorage")}catch(f){}try{l=s.getAttribute("jStorage_update")}catch(c){}i.jStorage=a,u="userDataBehavior"}S(),N(),g(),C(),"addEventListener"in window&&window.addEventListener("pageshow",function(e){e.persisted&&y()},!1)}function m(){var e="{}";if(u=="userDataBehavior"){s.load("jStorage");try{e=s.getAttribute("jStorage")}catch(t){}try{l=s.getAttribute("jStorage_update")}catch(n){}i.jStorage=e}S(),N(),C()}function g(){u=="localStorage"||u=="globalStorage"?"addEventListener"in window?window.addEventListener("storage",y,!1):document.attachEvent("onstorage",y):u=="userDataBehavior"&&setInterval(y,1e3)}function y(){var e;clearTimeout(f),f=setTimeout(function(){if(u=="localStorage"||u=="globalStorage")e=i.jStorage_update;else if(u=="userDataBehavior"){s.load("jStorage");try{e=s.getAttribute("jStorage_update")}catch(t){}}e&&e!=l&&(l=e,b())},25)}function b(){var e=n.parse(n.stringify(r.__jstorage_meta.CRC32)),t;m(),t=n.parse(n.stringify(r.__jstorage_meta.CRC32));var i,s=[],o=[];for(i in e)if(e.hasOwnProperty(i)){if(!t[i]){o.push(i);continue}e[i]!=t[i]&&String(e[i]).substr(0,2)=="2."&&s.push(i)}for(i in t)t.hasOwnProperty(i)&&(e[i]||s.push(i));w(s,"updated"),w(o,"deleted")}function w(e,t){e=[].concat(e||[]);var n,r,i,s;if(t=="flushed"){e=[];for(var o in a)a.hasOwnProperty(o)&&e.push(o);t="deleted"}for(n=0,i=e.length;n<i;n++){if(a[e[n]])for(r=0,s=a[e[n]].length;r<s;r++)a[e[n]][r](e[n],t);if(a["*"])for(r=0,s=a["*"].length;r<s;r++)a["*"][r](e[n],t)}}function E(){var e=(+(new Date)).toString();if(u=="localStorage"||u=="globalStorage")try{i.jStorage_update=e}catch(t){u=!1}else u=="userDataBehavior"&&(s.setAttribute("jStorage_update",e),s.save("jStorage"));y()}function S(){if(i.jStorage)try{r=n.parse(String(i.jStorage))}catch(e){i.jStorage="{}"}else i.jStorage="{}";o=i.jStorage?String(i.jStorage).length:0,r.__jstorage_meta||(r.__jstorage_meta={}),r.__jstorage_meta.CRC32||(r.__jstorage_meta.CRC32={})}function x(){L();try{i.jStorage=n.stringify(r),s&&(s.setAttribute("jStorage",i.jStorage),s.save("jStorage")),o=i.jStorage?String(i.jStorage).length:0}catch(e){}}function T(e){if(typeof e!="string"&&typeof e!="number")throw new TypeError("Key name must be string or numeric");if(e=="__jstorage_meta")throw new TypeError("Reserved key name");return!0}function N(){var e,t,n,i,s=Infinity,o=!1,u=[];clearTimeout(p);if(!r.__jstorage_meta||typeof r.__jstorage_meta.TTL!="object")return;e=+(new Date),n=r.__jstorage_meta.TTL,i=r.__jstorage_meta.CRC32;for(t in n)n.hasOwnProperty(t)&&(n[t]<=e?(delete n[t],delete i[t],delete r[t],o=!0,u.push(t)):n[t]<s&&(s=n[t]));s!=Infinity&&(p=setTimeout(N,Math.min(s-e,2147483647))),o&&(x(),E(),w(u,"deleted"))}function C(){var e,t;if(!r.__jstorage_meta.PubSub)return;var n,i=h,s=[];for(e=t=r.__jstorage_meta.PubSub.length-1;e>=0;e--)n=r.__jstorage_meta.PubSub[e],n[0]>h&&(i=n[0],s.unshift(n));for(e=s.length-1;e>=0;e--)k(s[e][1],s[e][2]);h=i}function k(e,t){if(c[e])for(var r=0,i=c[e].length;r<i;r++)try{c[e][r](e,n.parse(n.stringify(t)))}catch(s){}}function L(){if(!r.__jstorage_meta.PubSub)return;var e=+(new Date)-2e3;for(var t=0,n=r.__jstorage_meta.PubSub.length;t<n;t++)if(r.__jstorage_meta.PubSub[t][0]<=e){r.__jstorage_meta.PubSub.splice(t,r.__jstorage_meta.PubSub.length-t);break}r.__jstorage_meta.PubSub.length||delete r.__jstorage_meta.PubSub}function A(e,t){r.__jstorage_meta||(r.__jstorage_meta={}),r.__jstorage_meta.PubSub||(r.__jstorage_meta.PubSub=[]),r.__jstorage_meta.PubSub.unshift([+(new Date),e,t]),x(),E()}function O(e,t){var n=e.length,r=t^n,i=0,s;while(n>=4)s=e.charCodeAt(i)&255|(e.charCodeAt(++i)&255)<<8|(e.charCodeAt(++i)&255)<<16|(e.charCodeAt(++i)&255)<<24,s=(s&65535)*1540483477+(((s>>>16)*1540483477&65535)<<16),s^=s>>>24,s=(s&65535)*1540483477+(((s>>>16)*1540483477&65535)<<16),r=(r&65535)*1540483477+(((r>>>16)*1540483477&65535)<<16)^s,n-=4,++i;switch(n){case 3:r^=(e.charCodeAt(i+2)&255)<<16;case 2:r^=(e.charCodeAt(i+1)&255)<<8;case 1:r^=e.charCodeAt(i)&255,r=(r&65535)*1540483477+(((r>>>16)*1540483477&65535)<<16)}return r^=r>>>13,r=(r&65535)*1540483477+(((r>>>16)*1540483477&65535)<<16),r^=r>>>15,r>>>0}var e="0.4.12",t=window.jQuery||window.$||(window.$={}),n={parse:window.JSON&&(window.JSON.parse||window.JSON.decode)||String.prototype.evalJSON&&function(e){return String(e).evalJSON()}||t.parseJSON||t.evalJSON,stringify:Object.toJSON||window.JSON&&(window.JSON.stringify||window.JSON.encode)||t.toJSON};if(typeof n.parse!="function"||typeof n.stringify!="function")throw new Error("No JSON support found, include //cdnjs.cloudflare.com/ajax/libs/json2/20110223/json2.js to page");var r={__jstorage_meta:{CRC32:{}}},i={jStorage:"{}"},s=null,o=0,u=!1,a={},f=!1,l=0,c={},h=+(new Date),p,d={isXML:function(e){var t=(e?e.ownerDocument||e:0).documentElement;return t?t.nodeName!=="HTML":!1},encode:function(e){if(!this.isXML(e))return!1;try{return(new XMLSerializer).serializeToString(e)}catch(t){try{return e.xml}catch(n){}}return!1},decode:function(e){var t="DOMParser"in window&&(new DOMParser).parseFromString||window.ActiveXObject&&function(e){var t=new ActiveXObject("Microsoft.XMLDOM");return t.async="false",t.loadXML(e),t},n;return t?(n=t.call("DOMParser"in window&&new DOMParser||window,e,"text/xml"),this.isXML(n)?n:!1):!1}};t.jStorage={version:e,set:function(e,t,i){T(e),i=i||{};if(typeof t=="undefined")return this.deleteKey(e),t;if(d.isXML(t))t={_is_xml:!0,xml:d.encode(t)};else{if(typeof t=="function")return undefined;t&&typeof t=="object"&&(t=n.parse(n.stringify(t)))}return r[e]=t,r.__jstorage_meta.CRC32[e]="2."+O(n.stringify(t),2538058380),this.setTTL(e,i.TTL||0),w(e,"updated"),t},get:function(e,t){return T(e),e in r?r[e]&&typeof r[e]=="object"&&r[e]._is_xml?d.decode(r[e].xml):r[e]:typeof t=="undefined"?null:t},deleteKey:function(e){return T(e),e in r?(delete r[e],typeof r.__jstorage_meta.TTL=="object"&&e in r.__jstorage_meta.TTL&&delete r.__jstorage_meta.TTL[e],delete r.__jstorage_meta.CRC32[e],x(),E(),w(e,"deleted"),!0):!1},setTTL:function(e,t){var n=+(new Date);return T(e),t=Number(t)||0,e in r?(r.__jstorage_meta.TTL||(r.__jstorage_meta.TTL={}),t>0?r.__jstorage_meta.TTL[e]=n+t:delete r.__jstorage_meta.TTL[e],x(),N(),E(),!0):!1},getTTL:function(e){var t=+(new Date),n;return T(e),e in r&&r.__jstorage_meta.TTL&&r.__jstorage_meta.TTL[e]?(n=r.__jstorage_meta.TTL[e]-t,n||0):0},flush:function(){return r={__jstorage_meta:{CRC32:{}}},x(),E(),w(null,"flushed"),!0},storageObj:function(){function e(){}return e.prototype=r,new e},index:function(){var e=[],t;for(t in r)r.hasOwnProperty(t)&&t!="__jstorage_meta"&&e.push(t);return e},storageSize:function(){return o},currentBackend:function(){return u},storageAvailable:function(){return!!u},listenKeyChange:function(e,t){T(e),a[e]||(a[e]=[]),a[e].push(t)},stopListening:function(e,t){T(e);if(!a[e])return;if(!t){delete a[e];return}for(var n=a[e].length-1;n>=0;n--)a[e][n]==t&&a[e].splice(n,1)},subscribe:function(e,t){e=(e||"").toString();if(!e)throw new TypeError("Channel not defined");c[e]||(c[e]=[]),c[e].push(t)},publish:function(e,t){e=(e||"").toString();if(!e)throw new TypeError("Channel not defined");A(e,t)},reInit:function(){m()},noConflict:function(e){return delete window.$.jStorage,e&&(window.jStorage=this),this}},v()})();