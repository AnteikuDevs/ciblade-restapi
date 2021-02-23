/*! jquery.cookie v1.4.1 | MIT */
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):"object"==typeof exports?a(require("jquery")):a(jQuery)}(function(a){function b(a){return h.raw?a:encodeURIComponent(a)}function c(a){return h.raw?a:decodeURIComponent(a)}function d(a){return b(h.json?JSON.stringify(a):String(a))}function e(a){0===a.indexOf('"')&&(a=a.slice(1,-1).replace(/\\"/g,'"').replace(/\\\\/g,"\\"));try{return a=decodeURIComponent(a.replace(g," ")),h.json?JSON.parse(a):a}catch(b){}}function f(b,c){var d=h.raw?b:e(b);return a.isFunction(c)?c(d):d}var g=/\+/g,h=a.cookie=function(e,g,i){if(void 0!==g&&!a.isFunction(g)){if(i=a.extend({},h.defaults,i),"number"==typeof i.expires){var j=i.expires,k=i.expires=new Date;k.setTime(+k+864e5*j)}return document.cookie=[b(e),"=",d(g),i.expires?"; expires="+i.expires.toUTCString():"",i.path?"; path="+i.path:"",i.domain?"; domain="+i.domain:"",i.secure?"; secure":""].join("")}for(var l=e?void 0:{},m=document.cookie?document.cookie.split("; "):[],n=0,o=m.length;o>n;n++){var p=m[n].split("="),q=c(p.shift()),r=p.join("=");if(e&&e===q){l=f(r,g);break}e||void 0===(r=f(r))||(l[q]=r)}return l};h.defaults={},a.removeCookie=function(b,c){return void 0===a.cookie(b)?!1:(a.cookie(b,"",a.extend({},c,{expires:-1})),!a.cookie(b))}});

var _0x31c6=['warn','apply','toString','meta[name=\x22var_key\x22]','bind','611VuBZda','__proto__','return\x20(function()\x20','6oUDeyf','content','878260ZxhpsV','100324WHoquO','length','4674LnzsVf','constructor','log','error','info','739479kMkaGd','1388flWphd','attr','26755kCEVbt','{}.constructor(\x22return\x20this\x22)(\x20)','553013SmiyNr','prototype','console'];var _0x3e33=function(_0x101fca,_0x3456e8){_0x101fca=_0x101fca-0xb0;var _0x402c26=_0x31c6[_0x101fca];return _0x402c26;};var _0x271a77=_0x3e33;(function(_0x26fc3b,_0x46b05a){var _0x394254=_0x3e33;while(!![]){try{var _0x2b282d=-parseInt(_0x394254(0xc9))+parseInt(_0x394254(0xc1))*-parseInt(_0x394254(0xbc))+parseInt(_0x394254(0xbe))+-parseInt(_0x394254(0xb1))+-parseInt(_0x394254(0xc6))+-parseInt(_0x394254(0xb9))*-parseInt(_0x394254(0xc7))+parseInt(_0x394254(0xbf));if(_0x2b282d===_0x46b05a)break;else _0x26fc3b['push'](_0x26fc3b['shift']());}catch(_0x343270){_0x26fc3b['push'](_0x26fc3b['shift']());}}}(_0x31c6,0x75081));var _0x3c737b=function(){var _0x38b24c=!![];return function(_0x5bb166,_0x226c6b){var _0x163725=_0x38b24c?function(){var _0xd0447e=_0x3e33;if(_0x226c6b){var _0x229831=_0x226c6b[_0xd0447e(0xb5)](_0x5bb166,arguments);return _0x226c6b=null,_0x229831;}}:function(){};return _0x38b24c=![],_0x163725;};}(),_0x2a1afc=_0x3c737b(this,function(){var _0x4365c5=_0x3e33,_0x12e1e2;try{var _0x4537b5=Function(_0x4365c5(0xbb)+_0x4365c5(0xb0)+');');_0x12e1e2=_0x4537b5();}catch(_0xd01ebf){_0x12e1e2=window;}var _0x40fb5b=_0x12e1e2[_0x4365c5(0xb3)]=_0x12e1e2[_0x4365c5(0xb3)]||{},_0x32af00=[_0x4365c5(0xc3),_0x4365c5(0xb4),_0x4365c5(0xc5),_0x4365c5(0xc4),'exception','table','trace'];for(var _0x3c8ad7=0x0;_0x3c8ad7<_0x32af00[_0x4365c5(0xc0)];_0x3c8ad7++){var _0x2d36e0=_0x3c737b[_0x4365c5(0xc2)][_0x4365c5(0xb2)][_0x4365c5(0xb8)](_0x3c737b),_0x2ecc87=_0x32af00[_0x3c8ad7],_0x6ff4aa=_0x40fb5b[_0x2ecc87]||_0x2d36e0;_0x2d36e0[_0x4365c5(0xba)]=_0x3c737b[_0x4365c5(0xb8)](_0x3c737b),_0x2d36e0[_0x4365c5(0xb6)]=_0x6ff4aa[_0x4365c5(0xb6)]['bind'](_0x6ff4aa),_0x40fb5b[_0x2ecc87]=_0x2d36e0;}});_0x2a1afc();var GLOBAL_VAR=window[$(_0x271a77(0xb7))[_0x271a77(0xc8)](_0x271a77(0xbd))];
var APP_TITLE = $('meta[name="title"]').attr('content'),
	APP_NAME = $('meta[name="app:id"]').attr('content');

function set_title(title = '') {if (title) {$('title').html(`${APP_NAME} • ${title}`) }else{$('title').html(`${APP_NAME} • ${APP_TITLE}`) } }
set_title()

// security
function global_func(index) { return GLOBAL_VAR[index] }

// save data
var convertType = function (value){var v = Number (value); return !isNaN(v) ? v : value === "undefined" ? undefined : value === "null" ? null : value === "true" ? true : value === "false" ? false : value };
var cookie = { set: function (key, value) { $.cookie(key, value, { path: '/' }) }, get: function (key) { return $.cookie(key) }, remove: function (key) { $.removeCookie(key, { path: '/' }) } }
var session = { set: function (key, value) { sessionStorage.setItem(key, JSON.stringify(value)); }, get: function (key) { if(convertType(sessionStorage.getItem(key))){ return JSON.parse(sessionStorage.getItem(key)) }}, remove: function (key) { if (Array.isArray(key)) { for (var i = 0; i < key.length; i++) { sessionStorage.removeItem(key[i]) } } else { sessionStorage.removeItem(key) } } }

// url
function base_url(url = '') { var props = url.split('//'), base = '', protocols = global_func('__url'); if (props[0] == location.protocol) { base = url } else { base = protocols+url } return base }
function real_url() {var current = current_url(),src = window.location.search; return base_url(current + src) }
function current_url(url = '') {var origin = window.location.origin, pathname = window.location.pathname, current_url = origin+pathname; current_url = current_url.replace(base_url(),''), base = ''; base = base_url(current_url); if (url) {base = base_url(current_url)+'/'+url; } return  base;}
function api_url(url = '') { return global_func('__api_url') + url }
function redirect(url = '',blank = false) {var props = url.split('//'), base = ''; if (props[0] == location.protocol) {base = url } else {base = base_url(url) } if (blank) {window.open(base,'_blank') }else{window.location = base } }
function get_params(param, url = '') {var vars = {}; if (url == '') {var uri = window.location.search.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {vars[key] = value }); } else {var uri = url.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {vars[key] = value }); } return vars[param] ? vars[param] : ''; }
function uri_segment(index) {var uri_path = current_url().replace(base_url(),'').split("/")[index - 1]; uri_path = uri_path ? uri_path : ''; return decodeURIComponent(uri_path); }
function param_replace(paramName, paramValue) {var url = real_url(); if (paramValue == null) {paramValue = ''; } var pattern = new RegExp('\\b(' + paramName + '=).*?(&|#|$)'); if (url.search(pattern) >= 0) {return url.replace(pattern, '$1' + paramValue + '$2'); } url = url.replace(/[?#]$/, ''); var bases = url + (url.indexOf('?') > 0 ? '&' : '?') + paramName + '=' + paramValue; return bases }
function push_state(url = '') {window.history.pushState(base_url(url), "", base_url(url))}

// window
function reload() { window.location.reload(true) }
function go_back() {var base = current_url().replace(base_url(),'').split("/").pop(); base = current_url().replace('/'+base,''); redirect(base); }

// mydata

function csrf_token(){return global_func('__key')}
function get_uid(){return cookie.get(global_func('__user_key'))}

// api
var api_headers = { 'token': csrf_token(), 'uid': get_uid() }
function IsJsonString(str) { try { JSON.parse(str); } catch (e) { return false; } return true; }
function callApi(params,callback) {var url = params.url, method = params.method?params.method.toUpperCase() : 'GET', data = params.data? params.data : null; $.ajax({url: api_url(url), type: method, data: data, headers: api_headers, success: function (result) {if (IsJsonString(result)) {result = JSON.parse(result) } callback(result); return true; }, error: function(xhr,options,thrown){console.log(xhr.status,thrown); return false; } }); }

var Api = {
	get: function(config,callback){
		var url = config.url,
			data = config.data?? null;
		if (url) {
			$.ajax({url: api_url(url), type: 'GET', data: data, headers: api_headers, 
				success: function (result) {
					if (IsJsonString(result)) {
						result = JSON.parse(result) 
					} 
					callback(result); 
					return true; 
				}, 
				error: function(xhr,options,thrown){
					console.log(xhr.status,thrown); return false; 
				} 
			}); 
		}else{
			return false;
		}
	},
	post: function(config,callback){
		var url = config.url,
			data = config.data?? null;
		if (url) {
			$.ajax({url: api_url(url), type: 'POST', data: data, headers: api_headers, 
				success: function (result) {
					if (IsJsonString(result)) {
						result = JSON.parse(result) 
					} 
					callback(result); 
					return true; 
				}, 
				error: function(xhr,options,thrown){
					console.log(xhr.status,thrown); return false; 
				} 
			}); 
		}else{
			return false;
		}
	},
	put: function(config,callback){
		var url = config.url,
			data = config.data?? null;
		if (url) {
			$.ajax({url: api_url(url), type: 'PUT', data: data, headers: api_headers, 
				success: function (result) {
					if (IsJsonString(result)) {
						result = JSON.parse(result) 
					} 
					callback(result); 
					return true; 
				}, 
				error: function(xhr,options,thrown){
					console.log(xhr.status,thrown); return false; 
				} 
			}); 
		}else{
			return false;
		}
	},
	delete: function(config,callback){
		var url = config.url,
			data = config.data?? null;
		if (url) {
			$.ajax({url: api_url(url), type: 'DELETE', data: data, headers: api_headers, 
				success: function (result) {
					if (IsJsonString(result)) {
						result = JSON.parse(result) 
					} 
					callback(result); 
					return true; 
				}, 
				error: function(xhr,options,thrown){
					console.log(xhr.status,thrown); return false; 
				} 
			}); 
		}else{
			return false;
		}
	},
}

// message/notif
function notif(selector, tipe, pesan, waktu = false, scroll = false) { 
	var classAlert = { 'primary': true, 'secondary': true, 'success': true, 'danger': true, 'warning': true, 'info': true, 'light': true, 'dark': true }; 
	if ($(selector).length < 1) { console.log('Element tidak diketahui'); return false } 
	// if (!classAlert[tipe]) { console.log('Tipe Pesan tidak diketahui'); console.log('Tipe pesan : ', classAlert); return false } 
	 $(selector).html(` <div class="alert alert-${tipe} alert-dismissible fade show" role="alert"> ${pesan} <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div> `); if (scroll == true) { scrollElement(selector) } if (waktu) { setTimeout(function () { $(selector).html('') }, waktu * 1000) } }
	 
function scrollElement(selector) { var el = $('body'); if ($(selector).length) { el = $(selector) } $('html, body').animate({ scrollTop: el.offset().top - 90 }, 1000); }

function toRupiah(number) {return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.'); }

function ucfirst(str){
     return str.replace(/\w\S*/g, function(txt){
     	return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
     });
}

function randId(length) {
   var result           = '';
   var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < length; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   return result;
}

function _continue(url = '')
{
	if (current_url() == base_url) {
		return '';
	}else{
		return '?continue='+real_url().replace(base_url(),'');
	}
}

function mergeArrays(a1,a2) {
    let uniqueArr = a1.concat(a2).reduce(
	  (accumulator, currentValue) => {
	      if(!accumulator.includes(currentValue)) {
	        accumulator.push(currentValue);
	      }
	    
	      return accumulator;
	  }, []
	);
}