!function(e,t){"object"==typeof exports&&"object"==typeof module?module.exports=t(require("vue-trumbowyg")):"function"==typeof define&&define.amd?define("vue-dynamic-form",["vue-trumbowyg"],t):"object"==typeof exports?exports["vue-dynamic-form"]=t(require("vue-trumbowyg")):e["vue-dynamic-form"]=t(e["vue-trumbowyg"])}(this,function(e){return function(e){function t(r){if(n[r])return n[r].exports;var o=n[r]={exports:{},id:r,loaded:!1};return e[r].call(o.exports,o,o.exports,t),o.loaded=!0,o.exports}var n={};return t.m=e,t.c=n,t.p="",t(0)}([function(e,t,n){n(1);var r=n(6)(n(7),n(44),null,null);e.exports=r.exports},function(e,t,n){var r=n(2);"string"==typeof r&&(r=[[e.id,r,""]]),r.locals&&(e.exports=r.locals);n(4)("47c5d6e8",r,!0)},function(e,t,n){t=e.exports=n(3)(void 0),t.push([e.id,".trumbowyg-box{margin-top:0}",""])},function(e,t){function n(e,t){var n=e[1]||"",o=e[3];if(!o)return n;if(t&&"function"==typeof btoa){var a=r(o),i=o.sources.map(function(e){return"/*# sourceURL="+o.sourceRoot+e+" */"});return[n].concat(i).concat([a]).join("\n")}return[n].join("\n")}function r(e){var t=btoa(unescape(encodeURIComponent(JSON.stringify(e)))),n="sourceMappingURL=data:application/json;charset=utf-8;base64,"+t;return"/*# "+n+" */"}e.exports=function(e){var t=[];return t.toString=function(){return this.map(function(t){var r=n(t,e);return t[2]?"@media "+t[2]+"{"+r+"}":r}).join("")},t.i=function(e,n){"string"==typeof e&&(e=[[null,e,""]]);for(var r={},o=0;o<this.length;o++){var a=this[o][0];"number"==typeof a&&(r[a]=!0)}for(o=0;o<e.length;o++){var i=e[o];"number"==typeof i[0]&&r[i[0]]||(n&&!i[2]?i[2]=n:n&&(i[2]="("+i[2]+") and ("+n+")"),t.push(i))}},t}},function(e,t,n){function r(e){for(var t=0;t<e.length;t++){var n=e[t],r=f[n.id];if(r){r.refs++;for(var o=0;o<r.parts.length;o++)r.parts[o](n.parts[o]);for(;o<n.parts.length;o++)r.parts.push(a(n.parts[o]));r.parts.length>n.parts.length&&(r.parts.length=n.parts.length)}else{for(var i=[],o=0;o<n.parts.length;o++)i.push(a(n.parts[o]));f[n.id]={id:n.id,refs:1,parts:i}}}}function o(){var e=document.createElement("style");return e.type="text/css",l.appendChild(e),e}function a(e){var t,n,r=document.querySelector('style[data-vue-ssr-id~="'+e.id+'"]');if(r){if(m)return v;r.parentNode.removeChild(r)}if(h){var a=d++;r=p||(p=o()),t=i.bind(null,r,a,!1),n=i.bind(null,r,a,!0)}else r=o(),t=u.bind(null,r),n=function(){r.parentNode.removeChild(r)};return t(e),function(r){if(r){if(r.css===e.css&&r.media===e.media&&r.sourceMap===e.sourceMap)return;t(e=r)}else n()}}function i(e,t,n,r){var o=n?"":r.css;if(e.styleSheet)e.styleSheet.cssText=y(t,o);else{var a=document.createTextNode(o),i=e.childNodes;i[t]&&e.removeChild(i[t]),i.length?e.insertBefore(a,i[t]):e.appendChild(a)}}function u(e,t){var n=t.css,r=t.media,o=t.sourceMap;if(r&&e.setAttribute("media",r),o&&(n+="\n/*# sourceURL="+o.sources[0]+" */",n+="\n/*# sourceMappingURL=data:application/json;base64,"+btoa(unescape(encodeURIComponent(JSON.stringify(o))))+" */"),e.styleSheet)e.styleSheet.cssText=n;else{for(;e.firstChild;)e.removeChild(e.firstChild);e.appendChild(document.createTextNode(n))}}var s="undefined"!=typeof document,c=n(5),f={},l=s&&(document.head||document.getElementsByTagName("head")[0]),p=null,d=0,m=!1,v=function(){},h="undefined"!=typeof navigator&&/msie [6-9]\b/.test(navigator.userAgent.toLowerCase());e.exports=function(e,t,n){m=n;var o=c(e,t);return r(o),function(t){for(var n=[],a=0;a<o.length;a++){var i=o[a],u=f[i.id];u.refs--,n.push(u)}t?(o=c(e,t),r(o)):o=[];for(var a=0;a<n.length;a++){var u=n[a];if(0===u.refs){for(var s=0;s<u.parts.length;s++)u.parts[s]();delete f[u.id]}}}};var y=function(){var e=[];return function(t,n){return e[t]=n,e.filter(Boolean).join("\n")}}()},function(e,t){e.exports=function(e,t){for(var n=[],r={},o=0;o<t.length;o++){var a=t[o],i=a[0],u=a[1],s=a[2],c=a[3],f={id:e+":"+o,css:u,media:s,sourceMap:c};r[i]?r[i].parts.push(f):n.push(r[i]={id:i,parts:[f]})}return n}},function(e,t){e.exports=function(e,t,n,r){var o,a=e=e||{},i=typeof e["default"];"object"!==i&&"function"!==i||(o=e,a=e["default"]);var u="function"==typeof a?a.options:a;if(t&&(u.render=t.render,u.staticRenderFns=t.staticRenderFns),n&&(u._scopeId=n),r){var s=Object.create(u.computed||null);Object.keys(r).forEach(function(e){var t=r[e];s[e]=function(){return t}}),u.computed=s}return{esModule:o,exports:a,options:u}}},function(e,t,n){"use strict";function r(e){return e&&e.__esModule?e:{"default":e}}Object.defineProperty(t,"__esModule",{value:!0});var o=n(8),a=r(o),i=n(43),u=r(i);t["default"]={name:"vue-dynamic-form",components:{Trumbowyg:u["default"]},data:function(){return{newBody:"",fieldData:[],checkboxData:[]}},props:{fields:{type:Array,"default":function(){return null}},entity:{type:Object,"default":function(){return null}}},mounted:function(){this.checkedBoxes()},methods:{checkedBoxes:function(){var e=[];if(this.$props.fields){for(var t=0,n=this.$props.fields.length;t<n;t++)"text"===this.$props.fields[t].type?e[this.$props.fields[t].name]="":"select"===this.$props.fields[t].type?e[this.$props.fields[t].name]="":"checkboxes"===this.$props.fields[t].type?e[this.$props.fields[t].name]=[]:"textarea"===this.$props.fields[t].type&&(e[this.$props.fields[t].name]="");if(this.$props.entity){var r=this;(0,a["default"])(this.$props.entity).forEach(function(t,n){e[t]=r.$props.entity[t]})}}this.fieldData=e},submitForm:function(e){this.$emit("submit-form",this.fieldData)},optionSelected:function(e,t,n){return!(!Array.isArray(this.$props.entity[t])||!this.$props.entity[t].indexOf(n))||(!(!this.$props.entity||!this.$props.entity[t]||this.$props.entity[t]!==n)||!this.$props.entity&&0===e)},defaultValue:function(e){return this.$props.entity&&this.$props.entity[e]?this.$props.entity[e]:void 0}}}},function(e,t,n){e.exports={"default":n(9),__esModule:!0}},function(e,t,n){n(10),e.exports=n(30).Object.keys},function(e,t,n){var r=n(11),o=n(13);n(28)("keys",function(){return function(e){return o(r(e))}})},function(e,t,n){var r=n(12);e.exports=function(e){return Object(r(e))}},function(e,t){e.exports=function(e){if(void 0==e)throw TypeError("Can't call method on  "+e);return e}},function(e,t,n){var r=n(14),o=n(27);e.exports=Object.keys||function(e){return r(e,o)}},function(e,t,n){var r=n(15),o=n(16),a=n(19)(!1),i=n(23)("IE_PROTO");e.exports=function(e,t){var n,u=o(e),s=0,c=[];for(n in u)n!=i&&r(u,n)&&c.push(n);for(;t.length>s;)r(u,n=t[s++])&&(~a(c,n)||c.push(n));return c}},function(e,t){var n={}.hasOwnProperty;e.exports=function(e,t){return n.call(e,t)}},function(e,t,n){var r=n(17),o=n(12);e.exports=function(e){return r(o(e))}},function(e,t,n){var r=n(18);e.exports=Object("z").propertyIsEnumerable(0)?Object:function(e){return"String"==r(e)?e.split(""):Object(e)}},function(e,t){var n={}.toString;e.exports=function(e){return n.call(e).slice(8,-1)}},function(e,t,n){var r=n(16),o=n(20),a=n(22);e.exports=function(e){return function(t,n,i){var u,s=r(t),c=o(s.length),f=a(i,c);if(e&&n!=n){for(;c>f;)if(u=s[f++],u!=u)return!0}else for(;c>f;f++)if((e||f in s)&&s[f]===n)return e||f||0;return!e&&-1}}},function(e,t,n){var r=n(21),o=Math.min;e.exports=function(e){return e>0?o(r(e),9007199254740991):0}},function(e,t){var n=Math.ceil,r=Math.floor;e.exports=function(e){return isNaN(e=+e)?0:(e>0?r:n)(e)}},function(e,t,n){var r=n(21),o=Math.max,a=Math.min;e.exports=function(e,t){return e=r(e),e<0?o(e+t,0):a(e,t)}},function(e,t,n){var r=n(24)("keys"),o=n(26);e.exports=function(e){return r[e]||(r[e]=o(e))}},function(e,t,n){var r=n(25),o="__core-js_shared__",a=r[o]||(r[o]={});e.exports=function(e){return a[e]||(a[e]={})}},function(e,t){var n=e.exports="undefined"!=typeof window&&window.Math==Math?window:"undefined"!=typeof self&&self.Math==Math?self:Function("return this")();"number"==typeof __g&&(__g=n)},function(e,t){var n=0,r=Math.random();e.exports=function(e){return"Symbol(".concat(void 0===e?"":e,")_",(++n+r).toString(36))}},function(e,t){e.exports="constructor,hasOwnProperty,isPrototypeOf,propertyIsEnumerable,toLocaleString,toString,valueOf".split(",")},function(e,t,n){var r=n(29),o=n(30),a=n(39);e.exports=function(e,t){var n=(o.Object||{})[e]||Object[e],i={};i[e]=t(n),r(r.S+r.F*a(function(){n(1)}),"Object",i)}},function(e,t,n){var r=n(25),o=n(30),a=n(31),i=n(33),u="prototype",s=function(e,t,n){var c,f,l,p=e&s.F,d=e&s.G,m=e&s.S,v=e&s.P,h=e&s.B,y=e&s.W,x=d?o:o[t]||(o[t]={}),b=x[u],g=d?r:m?r[t]:(r[t]||{})[u];d&&(n=t);for(c in n)f=!p&&g&&void 0!==g[c],f&&c in x||(l=f?g[c]:n[c],x[c]=d&&"function"!=typeof g[c]?n[c]:h&&f?a(l,r):y&&g[c]==l?function(e){var t=function(t,n,r){if(this instanceof e){switch(arguments.length){case 0:return new e;case 1:return new e(t);case 2:return new e(t,n)}return new e(t,n,r)}return e.apply(this,arguments)};return t[u]=e[u],t}(l):v&&"function"==typeof l?a(Function.call,l):l,v&&((x.virtual||(x.virtual={}))[c]=l,e&s.R&&b&&!b[c]&&i(b,c,l)))};s.F=1,s.G=2,s.S=4,s.P=8,s.B=16,s.W=32,s.U=64,s.R=128,e.exports=s},function(e,t){var n=e.exports={version:"2.5.0"};"number"==typeof __e&&(__e=n)},function(e,t,n){var r=n(32);e.exports=function(e,t,n){if(r(e),void 0===t)return e;switch(n){case 1:return function(n){return e.call(t,n)};case 2:return function(n,r){return e.call(t,n,r)};case 3:return function(n,r,o){return e.call(t,n,r,o)}}return function(){return e.apply(t,arguments)}}},function(e,t){e.exports=function(e){if("function"!=typeof e)throw TypeError(e+" is not a function!");return e}},function(e,t,n){var r=n(34),o=n(42);e.exports=n(38)?function(e,t,n){return r.f(e,t,o(1,n))}:function(e,t,n){return e[t]=n,e}},function(e,t,n){var r=n(35),o=n(37),a=n(41),i=Object.defineProperty;t.f=n(38)?Object.defineProperty:function(e,t,n){if(r(e),t=a(t,!0),r(n),o)try{return i(e,t,n)}catch(u){}if("get"in n||"set"in n)throw TypeError("Accessors not supported!");return"value"in n&&(e[t]=n.value),e}},function(e,t,n){var r=n(36);e.exports=function(e){if(!r(e))throw TypeError(e+" is not an object!");return e}},function(e,t){e.exports=function(e){return"object"==typeof e?null!==e:"function"==typeof e}},function(e,t,n){e.exports=!n(38)&&!n(39)(function(){return 7!=Object.defineProperty(n(40)("div"),"a",{get:function(){return 7}}).a})},function(e,t,n){e.exports=!n(39)(function(){return 7!=Object.defineProperty({},"a",{get:function(){return 7}}).a})},function(e,t){e.exports=function(e){try{return!!e()}catch(t){return!0}}},function(e,t,n){var r=n(36),o=n(25).document,a=r(o)&&r(o.createElement);e.exports=function(e){return a?o.createElement(e):{}}},function(e,t,n){var r=n(36);e.exports=function(e,t){if(!r(e))return e;var n,o;if(t&&"function"==typeof(n=e.toString)&&!r(o=n.call(e)))return o;if("function"==typeof(n=e.valueOf)&&!r(o=n.call(e)))return o;if(!t&&"function"==typeof(n=e.toString)&&!r(o=n.call(e)))return o;throw TypeError("Can't convert object to primitive value")}},function(e,t){e.exports=function(e,t){return{enumerable:!(1&e),configurable:!(2&e),writable:!(4&e),value:t}}},function(t,n){t.exports=e},function(e,t){e.exports={render:function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{attrs:{id:"vue-dynamic-form"}},[n("form",{on:{submit:function(t){t.preventDefault(),e.submitForm(t)}}},[e._l(this.$props.fields,function(t){return"checkboxes"===t.type?n("div",{staticClass:"checkbox"},e._l(t.options,function(r,o){return t.options?n("label",{attrs:{"for":""}},[n("input",{directives:[{name:"model",rawName:"v-model",value:e.fieldData[t.name],expression:"fieldData[field.name]"}],attrs:{type:"checkbox",name:t.name,label:r.name},domProps:{checked:e.optionSelected(o,t.name,r.value),value:r.value,checked:Array.isArray(e.fieldData[t.name])?e._i(e.fieldData[t.name],r.value)>-1:e.fieldData[t.name]},on:{__c:function(n){var o=e.fieldData[t.name],a=n.target,i=!!a.checked;if(Array.isArray(o)){var u=r.value,s=e._i(o,u);a.checked?s<0&&(e.fieldData[t.name]=o.concat(u)):s>-1&&(e.fieldData[t.name]=o.slice(0,s).concat(o.slice(s+1)))}else e.$set(e.fieldData,t.name,i)}}}),e._v(" "+e._s(r.name)+"\n    ")]):e._e()})):n("div",{staticClass:"form-group"},[n("label",{staticClass:"control-label",attrs:{"for":t.name},domProps:{textContent:e._s(t.label)}}),e._v(" "),"textarea"===t.type&&t.html===!1?n("textarea",{directives:[{name:"model",rawName:"v-model",value:e.fieldData[t.name],expression:"fieldData[field.name]"}],staticClass:"form-control",attrs:{id:t.name,name:t.name,rows:t.rows?t.rows:10,cols:t.cols?t.cols:30},domProps:{value:e.defaultValue(t.name),value:e.fieldData[t.name]},on:{input:function(n){n.target.composing||e.$set(e.fieldData,t.name,n.target.value)}}}):"textarea"===t.type?n("trumbowyg",{staticClass:"form-control",attrs:{value:e.defaultValue(t.name),id:t.name,name:t.name},model:{value:e.fieldData[t.name],callback:function(n){e.$set(e.fieldData,t.name,n)},expression:"fieldData[field.name]"}}):"select"===t.type?n("select",{directives:[{name:"model",rawName:"v-model",value:e.fieldData[t.name],expression:"fieldData[field.name]"}],staticClass:"form-control",attrs:{name:t.name,id:t.name,required:!!t.required&&t.required},on:{change:function(n){var r=Array.prototype.filter.call(n.target.options,function(e){return e.selected}).map(function(e){var t="_value"in e?e._value:e.value;return t});e.$set(e.fieldData,t.name,n.target.multiple?r:r[0])}}},e._l(t.options,function(r,o){return t.options?n("option",{domProps:{value:r.value,selected:e.optionSelected(o,t.name,t.value),textContent:e._s(r.name)}}):e._e()})):"text"===t.type?n("input",{directives:[{name:"model",rawName:"v-model",value:e.fieldData[t.name],expression:"fieldData[field.name]"}],staticClass:"form-control",attrs:{type:"text",name:t.name,id:t.name,required:!!t.required&&t.required},domProps:{value:e.defaultValue(t.name),value:e.fieldData[t.name]},on:{input:function(n){n.target.composing||e.$set(e.fieldData,t.name,n.target.value)}}}):"password"===t.type?n("input",{directives:[{name:"model",rawName:"v-model",value:e.fieldData[t.name],expression:"fieldData[field.name]"}],staticClass:"form-control",attrs:{type:"password",name:t.name,id:t.name,required:!!t.required&&t.required},domProps:{value:e.defaultValue(t.name),value:e.fieldData[t.name]},on:{input:function(n){n.target.composing||e.$set(e.fieldData,t.name,n.target.value)}}}):"email"===t.type?n("input",{directives:[{name:"model",rawName:"v-model",value:e.fieldData[t.name],expression:"fieldData[field.name]"}],staticClass:"form-control",attrs:{type:"email",name:t.name,id:t.name,required:!!t.required&&t.required},domProps:{value:e.defaultValue(t.name),value:e.fieldData[t.name]},on:{input:function(n){n.target.composing||e.$set(e.fieldData,t.name,n.target.value)}}}):e._e()],1)}),e._v(" "),e._m(0)],2)])},staticRenderFns:[function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{staticClass:"form-group"},[n("button",{staticClass:"btn btn-primary",attrs:{type:"submit"}},[e._v("Update Menu Item")])])}]}}])});