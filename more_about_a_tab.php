<!DOCTYPE html>
<html>
	<?php 
	
	?>
	<title>More About a Tab</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<!--<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">-->
	<!--Toast package-->
	<link href="css/toast.css" rel="stylesheet" media="screen">
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/toast.js"></script>
	<!-- ********************************************** -->
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<!--<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>-->
	<script>
	/* jquery.form.min.js */
	(function(e){"use strict";if(typeof define==="function"&&define.amd){define(["jquery"],e)}else{e(typeof jQuery!="undefined"?jQuery:window.Zepto)}})(function(e){"use strict";function r(t){var n=t.data;if(!t.isDefaultPrevented()){t.preventDefault();e(t.target).ajaxSubmit(n)}}function i(t){var n=t.target;var r=e(n);if(!r.is("[type=submit],[type=image]")){var i=r.closest("[type=submit]");if(i.length===0){return}n=i[0]}var s=this;s.clk=n;if(n.type=="image"){if(t.offsetX!==undefined){s.clk_x=t.offsetX;s.clk_y=t.offsetY}else if(typeof e.fn.offset=="function"){var o=r.offset();s.clk_x=t.pageX-o.left;s.clk_y=t.pageY-o.top}else{s.clk_x=t.pageX-n.offsetLeft;s.clk_y=t.pageY-n.offsetTop}}setTimeout(function(){s.clk=s.clk_x=s.clk_y=null},100)}function s(){if(!e.fn.ajaxSubmit.debug){return}var t="[jquery.form] "+Array.prototype.join.call(arguments,"");if(window.console&&window.console.log){window.console.log(t)}else if(window.opera&&window.opera.postError){window.opera.postError(t)}}var t={};t.fileapi=e("<input type='file'/>").get(0).files!==undefined;t.formdata=window.FormData!==undefined;var n=!!e.fn.prop;e.fn.attr2=function(){if(!n){return this.attr.apply(this,arguments)}var e=this.prop.apply(this,arguments);if(e&&e.jquery||typeof e==="string"){return e}return this.attr.apply(this,arguments)};e.fn.ajaxSubmit=function(r){function k(t){var n=e.param(t,r.traditional).split("&");var i=n.length;var s=[];var o,u;for(o=0;o<i;o++){n[o]=n[o].replace(/\+/g," ");u=n[o].split("=");s.push([decodeURIComponent(u[0]),decodeURIComponent(u[1])])}return s}function L(t){var n=new FormData;for(var s=0;s<t.length;s++){n.append(t[s].name,t[s].value)}if(r.extraData){var o=k(r.extraData);for(s=0;s<o.length;s++){if(o[s]){n.append(o[s][0],o[s][1])}}}r.data=null;var u=e.extend(true,{},e.ajaxSettings,r,{contentType:false,processData:false,cache:false,type:i||"POST"});if(r.uploadProgress){u.xhr=function(){var t=e.ajaxSettings.xhr();if(t.upload){t.upload.addEventListener("progress",function(e){var t=0;var n=e.loaded||e.position;var i=e.total;if(e.lengthComputable){t=Math.ceil(n/i*100)}r.uploadProgress(e,n,i,t)},false)}return t}}u.data=null;var a=u.beforeSend;u.beforeSend=function(e,t){if(r.formData){t.data=r.formData}else{t.data=n}if(a){a.call(this,e,t)}};return e.ajax(u)}function A(t){function T(e){var t=null;try{if(e.contentWindow){t=e.contentWindow.document}}catch(n){s("cannot get iframe.contentWindow document: "+n)}if(t){return t}try{t=e.contentDocument?e.contentDocument:e.document}catch(n){s("cannot get iframe.contentDocument: "+n);t=e.document}return t}function k(){function f(){try{var e=T(v).readyState;s("state = "+e);if(e&&e.toLowerCase()=="uninitialized"){setTimeout(f,50)}}catch(t){s("Server abort: ",t," (",t.name,")");_(x);if(w){clearTimeout(w)}w=undefined}}var t=a.attr2("target"),n=a.attr2("action"),r="multipart/form-data",u=a.attr("enctype")||a.attr("encoding")||r;o.setAttribute("target",p);if(!i||/post/i.test(i)){o.setAttribute("method","POST")}if(n!=l.url){o.setAttribute("action",l.url)}if(!l.skipEncodingOverride&&(!i||/post/i.test(i))){a.attr({encoding:"multipart/form-data",enctype:"multipart/form-data"})}if(l.timeout){w=setTimeout(function(){b=true;_(S)},l.timeout)}var c=[];try{if(l.extraData){for(var h in l.extraData){if(l.extraData.hasOwnProperty(h)){if(e.isPlainObject(l.extraData[h])&&l.extraData[h].hasOwnProperty("name")&&l.extraData[h].hasOwnProperty("value")){c.push(e('<input type="hidden" name="'+l.extraData[h].name+'">').val(l.extraData[h].value).appendTo(o)[0])}else{c.push(e('<input type="hidden" name="'+h+'">').val(l.extraData[h]).appendTo(o)[0])}}}}if(!l.iframeTarget){d.appendTo("body")}if(v.attachEvent){v.attachEvent("onload",_)}else{v.addEventListener("load",_,false)}setTimeout(f,15);try{o.submit()}catch(m){var g=document.createElement("form").submit;g.apply(o)}}finally{o.setAttribute("action",n);o.setAttribute("enctype",u);if(t){o.setAttribute("target",t)}else{a.removeAttr("target")}e(c).remove()}}function _(t){if(m.aborted||M){return}A=T(v);if(!A){s("cannot access response document");t=x}if(t===S&&m){m.abort("timeout");E.reject(m,"timeout");return}else if(t==x&&m){m.abort("server abort");E.reject(m,"error","server abort");return}if(!A||A.location.href==l.iframeSrc){if(!b){return}}if(v.detachEvent){v.detachEvent("onload",_)}else{v.removeEventListener("load",_,false)}var n="success",r;try{if(b){throw"timeout"}var i=l.dataType=="xml"||A.XMLDocument||e.isXMLDoc(A);s("isXml="+i);if(!i&&window.opera&&(A.body===null||!A.body.innerHTML)){if(--O){s("requeing onLoad callback, DOM not available");setTimeout(_,250);return}}var o=A.body?A.body:A.documentElement;m.responseText=o?o.innerHTML:null;m.responseXML=A.XMLDocument?A.XMLDocument:A;if(i){l.dataType="xml"}m.getResponseHeader=function(e){var t={"content-type":l.dataType};return t[e.toLowerCase()]};if(o){m.status=Number(o.getAttribute("status"))||m.status;m.statusText=o.getAttribute("statusText")||m.statusText}var u=(l.dataType||"").toLowerCase();var a=/(json|script|text)/.test(u);if(a||l.textarea){var f=A.getElementsByTagName("textarea")[0];if(f){m.responseText=f.value;m.status=Number(f.getAttribute("status"))||m.status;m.statusText=f.getAttribute("statusText")||m.statusText}else if(a){var c=A.getElementsByTagName("pre")[0];var p=A.getElementsByTagName("body")[0];if(c){m.responseText=c.textContent?c.textContent:c.innerText}else if(p){m.responseText=p.textContent?p.textContent:p.innerText}}}else if(u=="xml"&&!m.responseXML&&m.responseText){m.responseXML=D(m.responseText)}try{L=H(m,u,l)}catch(g){n="parsererror";m.error=r=g||n}}catch(g){s("error caught: ",g);n="error";m.error=r=g||n}if(m.aborted){s("upload aborted");n=null}if(m.status){n=m.status>=200&&m.status<300||m.status===304?"success":"error"}if(n==="success"){if(l.success){l.success.call(l.context,L,"success",m)}E.resolve(m.responseText,"success",m);if(h){e.event.trigger("ajaxSuccess",[m,l])}}else if(n){if(r===undefined){r=m.statusText}if(l.error){l.error.call(l.context,m,n,r)}E.reject(m,"error",r);if(h){e.event.trigger("ajaxError",[m,l,r])}}if(h){e.event.trigger("ajaxComplete",[m,l])}if(h&&!--e.active){e.event.trigger("ajaxStop")}if(l.complete){l.complete.call(l.context,m,n)}M=true;if(l.timeout){clearTimeout(w)}setTimeout(function(){if(!l.iframeTarget){d.remove()}else{d.attr("src",l.iframeSrc)}m.responseXML=null},100)}var o=a[0],u,f,l,h,p,d,v,m,g,y,b,w;var E=e.Deferred();E.abort=function(e){m.abort(e)};if(t){for(f=0;f<c.length;f++){u=e(c[f]);if(n){u.prop("disabled",false)}else{u.removeAttr("disabled")}}}l=e.extend(true,{},e.ajaxSettings,r);l.context=l.context||l;p="jqFormIO"+(new Date).getTime();if(l.iframeTarget){d=e(l.iframeTarget);y=d.attr2("name");if(!y){d.attr2("name",p)}else{p=y}}else{d=e('<iframe name="'+p+'" src="'+l.iframeSrc+'" />');d.css({position:"absolute",top:"-1000px",left:"-1000px"})}v=d[0];m={aborted:0,responseText:null,responseXML:null,status:0,statusText:"n/a",getAllResponseHeaders:function(){},getResponseHeader:function(){},setRequestHeader:function(){},abort:function(t){var n=t==="timeout"?"timeout":"aborted";s("aborting upload... "+n);this.aborted=1;try{if(v.contentWindow.document.execCommand){v.contentWindow.document.execCommand("Stop")}}catch(r){}d.attr("src",l.iframeSrc);m.error=n;if(l.error){l.error.call(l.context,m,n,t)}if(h){e.event.trigger("ajaxError",[m,l,n])}if(l.complete){l.complete.call(l.context,m,n)}}};h=l.global;if(h&&0===e.active++){e.event.trigger("ajaxStart")}if(h){e.event.trigger("ajaxSend",[m,l])}if(l.beforeSend&&l.beforeSend.call(l.context,m,l)===false){if(l.global){e.active--}E.reject();return E}if(m.aborted){E.reject();return E}g=o.clk;if(g){y=g.name;if(y&&!g.disabled){l.extraData=l.extraData||{};l.extraData[y]=g.value;if(g.type=="image"){l.extraData[y+".x"]=o.clk_x;l.extraData[y+".y"]=o.clk_y}}}var S=1;var x=2;var N=e("meta[name=csrf-token]").attr("content");var C=e("meta[name=csrf-param]").attr("content");if(C&&N){l.extraData=l.extraData||{};l.extraData[C]=N}if(l.forceSync){k()}else{setTimeout(k,10)}var L,A,O=50,M;var D=e.parseXML||function(e,t){if(window.ActiveXObject){t=new ActiveXObject("Microsoft.XMLDOM");t.async="false";t.loadXML(e)}else{t=(new DOMParser).parseFromString(e,"text/xml")}return t&&t.documentElement&&t.documentElement.nodeName!="parsererror"?t:null};var P=e.parseJSON||function(e){return window["eval"]("("+e+")")};var H=function(t,n,r){var i=t.getResponseHeader("content-type")||"",s=n==="xml"||!n&&i.indexOf("xml")>=0,o=s?t.responseXML:t.responseText;if(s&&o.documentElement.nodeName==="parsererror"){if(e.error){e.error("parsererror")}}if(r&&r.dataFilter){o=r.dataFilter(o,n)}if(typeof o==="string"){if(n==="json"||!n&&i.indexOf("json")>=0){o=P(o)}else if(n==="script"||!n&&i.indexOf("javascript")>=0){e.globalEval(o)}}return o};return E}if(!this.length){s("ajaxSubmit: skipping submit process - no element selected");return this}var i,o,u,a=this;if(typeof r=="function"){r={success:r}}else if(r===undefined){r={}}i=r.type||this.attr2("method");o=r.url||this.attr2("action");u=typeof o==="string"?e.trim(o):"";u=u||window.location.href||"";if(u){u=(u.match(/^([^#]+)/)||[])[1]}r=e.extend(true,{url:u,success:e.ajaxSettings.success,type:i||e.ajaxSettings.type,iframeSrc:/^https/i.test(window.location.href||"")?"javascript:false":"about:blank"},r);var f={};this.trigger("form-pre-serialize",[this,r,f]);if(f.veto){s("ajaxSubmit: submit vetoed via form-pre-serialize trigger");return this}if(r.beforeSerialize&&r.beforeSerialize(this,r)===false){s("ajaxSubmit: submit aborted via beforeSerialize callback");return this}var l=r.traditional;if(l===undefined){l=e.ajaxSettings.traditional}var c=[];var h,p=this.formToArray(r.semantic,c);if(r.data){r.extraData=r.data;h=e.param(r.data,l)}if(r.beforeSubmit&&r.beforeSubmit(p,this,r)===false){s("ajaxSubmit: submit aborted via beforeSubmit callback");return this}this.trigger("form-submit-validate",[p,this,r,f]);if(f.veto){s("ajaxSubmit: submit vetoed via form-submit-validate trigger");return this}var d=e.param(p,l);if(h){d=d?d+"&"+h:h}if(r.type.toUpperCase()=="GET"){r.url+=(r.url.indexOf("?")>=0?"&":"?")+d;r.data=null}else{r.data=d}var v=[];if(r.resetForm){v.push(function(){a.resetForm()})}if(r.clearForm){v.push(function(){a.clearForm(r.includeHidden)})}if(!r.dataType&&r.target){var m=r.success||function(){};v.push(function(t){var n=r.replaceTarget?"replaceWith":"html";e(r.target)[n](t).each(m,arguments)})}else if(r.success){v.push(r.success)}r.success=function(e,t,n){var i=r.context||this;for(var s=0,o=v.length;s<o;s++){v[s].apply(i,[e,t,n||a,a])}};if(r.error){var g=r.error;r.error=function(e,t,n){var i=r.context||this;g.apply(i,[e,t,n,a])}}if(r.complete){var y=r.complete;r.complete=function(e,t){var n=r.context||this;y.apply(n,[e,t,a])}}var b=e("input[type=file]:enabled",this).filter(function(){return e(this).val()!==""});var w=b.length>0;var E="multipart/form-data";var S=a.attr("enctype")==E||a.attr("encoding")==E;var x=t.fileapi&&t.formdata;s("fileAPI :"+x);var T=(w||S)&&!x;var N;if(r.iframe!==false&&(r.iframe||T)){if(r.closeKeepAlive){e.get(r.closeKeepAlive,function(){N=A(p)})}else{N=A(p)}}else if((w||S)&&x){N=L(p)}else{N=e.ajax(r)}a.removeData("jqxhr").data("jqxhr",N);for(var C=0;C<c.length;C++){c[C]=null}this.trigger("form-submit-notify",[this,r]);return this};e.fn.ajaxForm=function(t){t=t||{};t.delegation=t.delegation&&e.isFunction(e.fn.on);if(!t.delegation&&this.length===0){var n={s:this.selector,c:this.context};if(!e.isReady&&n.s){s("DOM not ready, queuing ajaxForm");e(function(){e(n.s,n.c).ajaxForm(t)});return this}s("terminating; zero elements found by selector"+(e.isReady?"":" (DOM not ready)"));return this}if(t.delegation){e(document).off("submit.form-plugin",this.selector,r).off("click.form-plugin",this.selector,i).on("submit.form-plugin",this.selector,t,r).on("click.form-plugin",this.selector,t,i);return this}return this.ajaxFormUnbind().bind("submit.form-plugin",t,r).bind("click.form-plugin",t,i)};e.fn.ajaxFormUnbind=function(){return this.unbind("submit.form-plugin click.form-plugin")};e.fn.formToArray=function(n,r){var i=[];if(this.length===0){return i}var s=this[0];var o=this.attr("id");var u=n?s.getElementsByTagName("*"):s.elements;var a;if(u&&!/MSIE [678]/.test(navigator.userAgent)){u=e(u).get()}if(o){a=e(':input[form="'+o+'"]').get();if(a.length){u=(u||[]).concat(a)}}if(!u||!u.length){return i}var f,l,c,h,p,d,v;for(f=0,d=u.length;f<d;f++){p=u[f];c=p.name;if(!c||p.disabled){continue}if(n&&s.clk&&p.type=="image"){if(s.clk==p){i.push({name:c,value:e(p).val(),type:p.type});i.push({name:c+".x",value:s.clk_x},{name:c+".y",value:s.clk_y})}continue}h=e.fieldValue(p,true);if(h&&h.constructor==Array){if(r){r.push(p)}for(l=0,v=h.length;l<v;l++){i.push({name:c,value:h[l]})}}else if(t.fileapi&&p.type=="file"){if(r){r.push(p)}var m=p.files;if(m.length){for(l=0;l<m.length;l++){i.push({name:c,value:m[l],type:p.type})}}else{i.push({name:c,value:"",type:p.type})}}else if(h!==null&&typeof h!="undefined"){if(r){r.push(p)}i.push({name:c,value:h,type:p.type,required:p.required})}}if(!n&&s.clk){var g=e(s.clk),y=g[0];c=y.name;if(c&&!y.disabled&&y.type=="image"){i.push({name:c,value:g.val()});i.push({name:c+".x",value:s.clk_x},{name:c+".y",value:s.clk_y})}}return i};e.fn.formSerialize=function(t){return e.param(this.formToArray(t))};e.fn.fieldSerialize=function(t){var n=[];this.each(function(){var r=this.name;if(!r){return}var i=e.fieldValue(this,t);if(i&&i.constructor==Array){for(var s=0,o=i.length;s<o;s++){n.push({name:r,value:i[s]})}}else if(i!==null&&typeof i!="undefined"){n.push({name:this.name,value:i})}});return e.param(n)};e.fn.fieldValue=function(t){for(var n=[],r=0,i=this.length;r<i;r++){var s=this[r];var o=e.fieldValue(s,t);if(o===null||typeof o=="undefined"||o.constructor==Array&&!o.length){continue}if(o.constructor==Array){e.merge(n,o)}else{n.push(o)}}return n};e.fieldValue=function(t,n){var r=t.name,i=t.type,s=t.tagName.toLowerCase();if(n===undefined){n=true}if(n&&(!r||t.disabled||i=="reset"||i=="button"||(i=="checkbox"||i=="radio")&&!t.checked||(i=="submit"||i=="image")&&t.form&&t.form.clk!=t||s=="select"&&t.selectedIndex==-1)){return null}if(s=="select"){var o=t.selectedIndex;if(o<0){return null}var u=[],a=t.options;var f=i=="select-one";var l=f?o+1:a.length;for(var c=f?o:0;c<l;c++){var h=a[c];if(h.selected){var p=h.value;if(!p){p=h.attributes&&h.attributes.value&&!h.attributes.value.specified?h.text:h.value}if(f){return p}u.push(p)}}return u}return e(t).val()};e.fn.clearForm=function(t){return this.each(function(){e("input,select,textarea",this).clearFields(t)})};e.fn.clearFields=e.fn.clearInputs=function(t){var n=/^(?:color|date|datetime|email|month|number|password|range|search|tel|text|time|url|week)$/i;return this.each(function(){var r=this.type,i=this.tagName.toLowerCase();if(n.test(r)||i=="textarea"){this.value=""}else if(r=="checkbox"||r=="radio"){this.checked=false}else if(i=="select"){this.selectedIndex=-1}else if(r=="file"){if(/MSIE/.test(navigator.userAgent)){e(this).replaceWith(e(this).clone(true))}else{e(this).val("")}}else if(t){if(t===true&&/hidden/.test(r)||typeof t=="string"&&e(this).is(t)){this.value=""}}})};e.fn.resetForm=function(){return this.each(function(){if(typeof this.reset=="function"||typeof this.reset=="object"&&!this.reset.nodeType){this.reset()}})};e.fn.enable=function(e){if(e===undefined){e=true}return this.each(function(){this.disabled=!e})};e.fn.selected=function(t){if(t===undefined){t=true}return this.each(function(){var n=this.type;if(n=="checkbox"||n=="radio"){this.checked=t}else if(this.tagName.toLowerCase()=="option"){var r=e(this).parent("select");if(t&&r[0]&&r[0].type=="select-one"){r.find("option").selected(false)}this.selected=t}})};e.fn.ajaxSubmit.debug=false})
	</script>
	
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/simple-sidebar.css">
	<link rel="stylesheet" type="text/css" href="css/my_custom_style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- This is what you need for sweet alert -->
	<script src="dist/sweetalert-dev.js"></script>
	<link rel="stylesheet" href="dist/sweetalert.css">
	<!--.......................-->
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/npm.js"></script>
	<script src="homepage.js"></script>
	<script type="text/JavaScript">
		var js_session = sessionStorage.getItem('user_details');
		if(js_session=="null"){
			window.location.assign("index.html");
		}
		var user_session = JSON.parse(js_session);
		
		$(document).ready(function(){
			$("#menu-toggle").click(function(e) {
				e.preventDefault();
				$("#wrapper").toggleClass("toggled");
			});
		});
		function toggle(){
			//alert("Hi");
			$("#wrapper").toggleClass("toggled");
		}
		function getSession(){
			document.getElementById("user_detail_section").innerHTML=user_session.username;
			setInterval(
				function(){
						//alert("Hello"); 
						$.ajax({
						url: "getUserSession.php",
						type: "GET",
						success:function(data){
							if(data.trim()=="null"){
								//user_session=null;
								window.location.assign("index.html");
							}
							else{
								//user_session=JSON.parse(data);
							}
						},
						error:function(error_data,y,z){
							//user_session=null;
							//alert(error_data+" "+y+" "+z);
						}
					});
				}, 30000);	
		}
	</script>
	<body onload='getSession();'>
		<nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" onclick="toggle();" href="#menu-toggle" id="menu-toggle">
				  <span class="glyphicon glyphicon-align-justify"></span>
			  </a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">  
				<li class="active">
					<a href="#">
					<?php 
						include('connect_db.php');
						include('tabgen_php_functions.php');
						$tab_id = $_GET['tab_id'];
						if($conn){
							$tab_details = getTabWithTemplate($conn,$tab_id);
							echo $tab_details['Name'];
						}
						else{
							echo "Failed to connect Database";
						}
						
					?> <span class="sr-only">(current)</span></a>
				</li>
				<li>
					<!--
					<a>
						<button class='btn' onclick="location.reload();getArticles(tab_id,'first_time_load');">
							<span class="glyphicon glyphicon-repeat"></span> Reload Latest Articles
						</button>
					</a>
					-->
				</li>
				<script type="text/JavaScript">
					var before_timestamp;//for pagination
					var after_timestamp;//for pagination
					var indicator;
					var image_path=[];
					var files_path=[];
					var queryString = new Array();
					if (window.location.search.split('?').length > 1) {
						var params = window.location.search.split('?')[1].split('&');
						for (var i = 0; i < params.length; i++) {
							var key = params[i].split('=')[0];
							var value = decodeURIComponent(params[i].split('=')[1]);
							queryString[key] = value;
							//alert(key);
						}
					}	
					var tab_id=queryString['tab_id'];
					getArticles(tab_id,"first_time_load");
					
					function getFiles(i){
						var file_list=files_path[i];
						var files_layout="";
										
						var j=0;
						for(var j=0;j<file_list.length;j++){
							var id=file_list[j].Id;
							var files=file_list[j].file_name;
							/*attachment_bg*/
							files_layout+=(files==null || files=="")?"":"<div class='attachment_bg'>"+
											"<button class='close' onclick='deleteFile(\""+i+"\",\""+id+"\");'>&times;</button>"+
											"<a href='"+files+
												"' target='_blank'>"+
												"<img src='"+file_list[j].file_icon+"' height='60px' width='60px' alt='No Icon'/>"+
												extractFileName(files)+"</a>"+
												"</div>";
						}
						files_layout=j>0?"<div><h5>Attached files:</h5></div>"+files_layout:"";
						return files_layout;
					}
					/*js function to delete a file*/
					function deleteFile(i,file_id){
						var article_id = document.getElementById("article_id"+i).value;
						swal({   
							title: "Are you sure to delete this file?", 
							text: "Once it is deleted, you will not be able to recover it!",   
							type: "warning",   
							showCancelButton: true,   
							confirmButtonColor: "#DD6B55",   
							confirmButtonText: "YES",   
							cancelButtonText: "NO",   
							closeOnConfirm: false,   
							closeOnCancel: true 
						}, 
						function(isConfirm){
							if(isConfirm){
								$.ajax({
									url: "delete_file.php",
									type: "POST",
									data: {"user_id":user_session.id,"file_id":file_id,"article_id":article_id},
									success: function(resp){
										var json_resp = JSON.parse(resp);
										if(json_resp.status==true){
											swal("Delete Successful!", json_resp.message, "success");
											files_path[i]=json_resp.file_lists;
											refreshFileLayout(i);
										}
										else{
											swal("File deletion Failed!", json_resp.message, "error");
										}
									},
									error: function(){
										swal("File deletion Failed!",
										 "Unable to reach server or the requested resource is not available at server."+
										 " Please check your connection or try again later.",
										  "error");
									}
								});
							}
						});	
					}
					function getArticles(tab_id,loading_mode){
						//alert(tab_id);
						var data;
						if(loading_mode=="first_time_load"){
							data="tab_id="+tab_id+"&loading_mode="+loading_mode;
						}
						else if(loading_mode=="before"){
							data="tab_id="+tab_id+"&loading_mode="+loading_mode+"&timestamp="+before_timestamp;
						}
						else if(loading_mode=="after"){
							data="tab_id="+tab_id+"&loading_mode="+loading_mode+"&timestamp="+after_timestamp;
						}
						$.ajax({
							url: "getArticles.php?"+data,
							type: "GET",
							success: function(resp){
								//alert(resp);
								var result = JSON.parse(resp);
								if(result.state==true){
									var output = result.output;
									if(output==null){
										if(loading_mode=="first_time_load"){
											document.getElementById("tab_contents").innerHTML="<br/><center>"+
											"<img class='img-circle' src='img/empty_article_box.jpg' alt='No Article'"+
											" height='50%' width='60%'/>"+
											"<br/>No article found, create a new one.</center>";
										}
										else if(loading_mode=="before"){
											//do nothing
											swal("No more article!");
										}
										else if(loading_mode=="after"){
											//do nothing
											//swal("No more news article!");
										}
										return false;
									}
									var article_layout="";
									
									for(var i=0;i<output.length;i++){
										var Link=output[i].Links;
										var image=output[i].Images;
										image_path[i]=output[i].Images;
										files_path[i]=output[i].Filenames;
										var file_list=files_path[i];
										
										//image==null?"":
										var image_layout=(image==null || image=="")?"":"<center><img src='"+image+
											"' height='80%' width='100%'/></center>";
										
										var link_layout="";
										if(Link.trim()==0){
											link_layout="";
										}
										else{
											link_layout="Reference: <a href='"+output[i].Links+"' target='_blank'>"+
											output[i].Links+"</a>";
										}
										var textual_content=output[i].Textual_content;
										textual_content = textual_content.replace("'","%");
										
										var status = output[i].Active;//whether the article is active or inactive
										var status_layout="";
										if(status==null || status.trim()=="false"){
											 status_layout=""+
												"<div class='form-group'>"+
													"<div class='col-sm-1 control-label'>"+
														"<input type='checkbox' "+
															"onclick='activateOrDeactivateArticle(\""+i+"\");'"+
															"id='myonoffswitch"+i+"'/>"+
													"</div>"+
													"<label class='col-sm-8' id='statusLabel"+i+"' for='myonoffswitch"+i+"'>"+
														"Check here to activate article."+
													"</label>"+
												"</div>";
										}
										else if(status.trim()=="true"){
											status_layout=""+
												"<div class='form-group'>"+
													"<div class='col-sm-1 control-label'>"+
														"<input type='checkbox' "+
															"onclick='activateOrDeactivateArticle(\""+i+"\");'"+
															"id='myonoffswitch"+i+"' checked/>"+
													"</div>"+
													"<label class='col-sm-8' id='statusLabel"+i+"' for='myonoffswitch"+i+"'>"+
													"Uncheck here to deactivate article."+
													"</label>"+
												"</div>";
										}
										
										/*		//button for deleting article
													"<button type='button' style='float:right;'"+ 
														"onclick='deleteArticle(\""+i+"\");'"+
														"class='close' aria-label='Close' id='deleteArticle"+i+"'>"+
														"<span class='glyphicon glyphicon-remove'></span>"+
													"</button>"+*/
										article_layout+=""+
											"<div class='article'>"+
												"<div class='headLine' id='article_title"+i+"'>"+
													output[i].Name+
													"<input type='hidden' id='article_id"+i+"' value='"+output[i].Id+"'/>"+	
												"</div>"+
												"<div style='height:70%;padding:10px'>"+
													"<div id='image_content"+i+"'>"+image_layout+"</div><br/>"+
													"<div id='textual_content"+i+"'>"+output[i].Textual_content+
														"<button class='btn btn-link' style='float:right' onclick='editArticle(\""+i+"\");'>"+
														"<span class='glyphicon glyphicon-pencil'></span></button>"+
													"</div>"+
													"<div><input type='hidden' id='edit_text"+i+
														"' value='"+textual_content+"'/></div>"+
													"<br/>"+
													"<div style='width:98%;overflow:hidden;overflow-x:auto' "+
														"id='files_content"+i+"'>"+getFiles(i)+"</div>"+
													"<div id='file_attachment_layout"+i+"'></div>"+
													"<div style='width:98%;overflow:hidden;overflow-x:auto' "+
														"id='link_content"+i+"'>"+link_layout+"</div>"+
												"</div>"+
												""+status_layout+
												"<br/><hr/>"+
												"<div id='btn_group"+i+"' "+
													"class='btn-group' style='float:right;padding-right:5px;padding-bottom:5px' >"+
													"<button class='btn btn-info' onclick='uploadImage(\""+i+"\");'>"+
														"<span class='glyphicon glyphicon-picture'></span></button>"+
													"<button class='btn btn-info' onclick='attachFile(\""+i+"\");'>"+
													"<span class='glyphicon glyphicon-paperclip'></span></button>"+
													"<a href='#' data-toggle='modal' data-target='#Editlink' "+
														"onclick='editLink(\""+i+"\",\""+Link+"\");'"+
														"class='btn btn-info'><span class='glyphicon glyphicon-link'>"+
														"</span></a>"+
												"</div>"+
											"</div>";
										document.getElementById("tab_contents").innerHTML=article_layout;
										refreshFileLayout(i);
									}
									before_timestamp=output[output.length-1].CreateAt;
									after_timestamp=output[0].CreateAt;
								}
								else{
									document.getElementById("tab_contents").innerHTML="<center>"+result.message+"</center>";
								}
							},
							error: function(){
								swal("Server unreachable!", "Sorry, we are unable to reach server or requested resource is not found,"+
								" please check your connection or try again later.", "error");
							}
						});
					}
					
					function activateOrDeactivateArticle(i){
						var article_id = document.getElementById("article_id"+i).value;
						var status = document.getElementById("myonoffswitch"+i).checked;

						if(status==false){
							swal({   
									title: "Article Deactivating...",  
									text: "you are deactivating this article",   
									timer: 1000,   
									showConfirmButton: false 
								}); 
						}
						else{
							swal({   
									title: "Article Activating...",  
									text: "you are activating this article",   
									timer: 1000,   
									showConfirmButton: false 
								});  
						}
						$.ajax({
							url: "activateOrDeactivateArticle.php",
							type: "POST",
							data: {"article_id":article_id,"status":status,"type":"article"},
							success: function(resp){
								var json_resp = JSON.parse(resp);
								swal({   
									title: "",  
									text: json_resp.message,   
									timer: 1500,   
									showConfirmButton: false 
								});
								if(status==true){
									document.getElementById("statusLabel"+i).innerHTML="Uncheck here to "+
											"deactivate article.";
								}
								else{
									document.getElementById("statusLabel"+i).innerHTML="Check here to "+
											"activate article.";
								}
							}
						}); 
					}
				</script>
			  </ul>
			  <ul class="nav navbar-nav navbar-right">	 
				<li>
					
					<a>
						<div class="btn-group">
							<button onclick="getArticles(tab_id,'after');" class='btn btn-default'><span class="glyphicon glyphicon-chevron-left"></span></button>
							<button onclick="getArticles(tab_id,'before');" class='btn btn-default'><span class="glyphicon glyphicon-chevron-right"></span></button>
						</div>	
					</a>
				</li>
			  </ul>
			</div>
		  </div>
		</nav>
	<div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
			<center>
				<li class="active"><a href="#"><span class="sr-only">(current)</span></a></li>
			</center>
			
            <ul class="sidebar-nav">
				<br/>
				<li>
					<a href="home.php">
						Back to home
					</a>
				</li>
                <li>
					<a href="#" data-toggle="modal" onclick='resetArticle();' data-target="#createArticle">
						Create an article</span>
					</a>
				</li>

            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
			
			<div class="container-fluid">
            <div class="" id="tab_contents">	
				<script type='text/JavaScript'>
					function editLink(i,article_link){
						indicator=i;
						var article_id = document.getElementById("article_id"+i).value;
						if(article_link.trim()==0 || article_link==null){
							document.getElementById("edit_link_label").innerHTML="Add a link for the article below:";
							document.getElementById("article_link").value="";
						}
						else{
							document.getElementById("edit_link_label").innerHTML="Edit the link below:";
							document.getElementById("article_link").value=article_link;
						}
						document.getElementById("article_ID").value=article_id;
						document.getElementById("editLinkResponse").innerHTML="";
					}
					function edit_link_done(){
						//alert(indicator);
						var article_id = document.getElementById("article_ID").value;
						var new_link=document.getElementById("article_link").value;
						var re = /^(http[s]?:\/\/){0,1}(www\.){0,1}[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,5}[\.]{0,1}/;
						if (!re.test(new_link)) { 
							document.getElementById("editLinkResponse").innerHTML="Invalid URL";
							document.getElementById("editLinkResponse").style.color="red";
							return false;
						}
						$.ajax({
							url: "update_article.php",
							type: "POST",
							data: {"article_id":article_id,"Links":new_link},
							success: function(resp){
								var json_resp = JSON.parse(resp);
								if(json_resp.status==true){
									document.getElementById("link_content"+indicator).innerHTML="Reference: <a href='"+new_link+
										"' target='_blank'>"+new_link+"</a>";
									document.getElementById("editLinkResponse").innerHTML=json_resp.message;
									document.getElementById("editLinkResponse").style.color="green";
									document.getElementById("btn_group"+indicator).innerHTML=""+
												"<button class='btn btn-info' onclick='uploadImage(\""+indicator+"\");'><span class='glyphicon glyphicon-picture'></span></button>"+
												"<button class='btn btn-info' onclick='attachFile(\""+indicator+"\");'>"+
													"<span class='glyphicon glyphicon-paperclip'></span></button>"+
												"<a href='#' data-toggle='modal' data-target='#Editlink' "+
														"onclick='editLink(\""+indicator+"\",\""+new_link+"\");'"+
														"class='btn btn-info'><span class='glyphicon glyphicon-link'></span></a>";
								}
								else{
									document.getElementById("editLinkResponse").innerHTML=json_resp.message;
									document.getElementById("editLinkResponse").style.color="red";
								}
							},
							error: function(x,y,z){
								document.getElementById("editLinkResponse").innerHTML="<b>Oops! Unable to reach server.</b>";
								document.getElementById("editLinkResponse").style.color="red";
							}
						});	
					}
					function edit_link_cancel(){
						
					}
					function editArticle(i){
						var content = document.getElementById("edit_text"+i).value;
						content = content.replace("%","'");
						//alert(content);
						document.getElementById("textual_content"+i).innerHTML="<div class='textarea_bg'>"+
							"<div class='div_bg'><label for='edited_text"+i+"'>Edit the content:</label>"+
							"<textarea class='form-control' rows='10' cols='50' id='edited_text"+i+"'>"+content+"</textarea></div></div>"+
							"<div class='textarea_bg' style='float:right'><input type='button' value='CANCEL' class='btn btn-primary' "+
								"onclick='cancel_edit(\""+i+"\");'/>&nbsp;"+
							"<input type='button' value='DONE' class='btn btn-primary' onclick='done_edit(\""+i+"\");'/></div><br/><br/>";
					}
					
					function cancel_edit(i){
						//alert(i);
						var content = document.getElementById("edit_text"+i).value;
						content = content.replace("%","'");
						document.getElementById("textual_content"+i).innerHTML=content+
							"<button class='btn btn-link' style='float:right' onclick='editArticle(\""+i+"\");'>"+
								"<span class='glyphicon glyphicon-pencil'></span></button>";
					}
					
					function done_edit(i){
						//alert(i);
						var content = document.getElementById("edited_text"+i).value;
						content = content.replace("%","'");
						var article_id = document.getElementById("article_id"+i).value;
						$.ajax({
							url: "update_article.php",
							type: "POST",
							data: {"article_id":article_id,"textual_content":content},
							success: function(resp){
								var resp_json = JSON.parse(resp);
								if(resp_json.status==true){
									document.getElementById("textual_content"+i).innerHTML=content+
										"<button class='btn btn-link' style='float:right' onclick='editArticle(\""+i+"\");'>"+
											"<span class='glyphicon glyphicon-pencil'></span></button>";
									document.getElementById("edit_text"+i).value=content;
								}
								else{
									alert(resp_json.message);
									cancel_edit(i);
								}
							},
							error: function(x,y,z){
								alert("Unable to connect server...");
							}
						});
						
					}
					
					function createArticle(){
						var tab_id = queryString['tab_id'];
						//alert("Tab Id: "+tab_id);
						var name = document.getElementById("title").value;
						var textual_content = document.getElementById("textual_content").value;
						var link_site = document.getElementById("link").value;
						var re = /^(http[s]?:\/\/){0,1}(www\.){0,1}[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,5}[\.]{0,1}/;
						name=name.trim();
						textual_content=textual_content.trim();
						if(name==null || name.length==0){
							document.getElementById("createArticleResp").innerHTML="<center><b>Please fill up article name.</b></center>";
							document.getElementById("createArticleResp").style.color="red";
							return false;
						}
						else if(textual_content==null || textual_content.length==0){
							document.getElementById("createArticleResp").innerHTML="<center><b>Please write something"+
							" about the article.</b></center>";
							document.getElementById("createArticleResp").style.color="red";
							return false;
						}
						else if(link_site.trim()!=0 && !re.test(link_site)){
							document.getElementById("createArticleResp").innerHTML="Sorry, you have entered Invalid URL in the link.";
							document.getElementById("createArticleResp").style.color="red";
							return false;
						}
						else{
							var post_data = {"tab_id":tab_id,"Name":name,"textual_content":textual_content,"link":link_site};
							//alert(JSON.stringify(post_data));
							$.ajax({
								type: "POST",
								url: "createArticle.php",
								data: post_data,
								success: function(resp){
									var result = JSON.parse(resp);
									document.getElementById("createArticleResp").innerHTML="<center><b>"+result.message+
									"</b></center>";
									if(result.status==true){
										document.getElementById("createArticleResp").style.color="green";
										getArticles(tab_id,"first_time_load");
									}
									else{
										document.getElementById("createArticleResp").style.color="red";
									}
								}
							});
						}
						return false;
					}
					/*js for uploading any file*/
					function attachFile(i){
						var article_id = document.getElementById("article_id"+i).value;
						var file_upload_layout=""+
							"<div class='select_img_bg'>"+
								"<form id='uploadFileForm"+i+"' action='upload.php' method='post'>"+
									"<div id='FileAttachtargetLayer"+i+"'></div>"+
									"<button type='button' class='close' "+
										"onclick='closeFileUpload(\""+i+"\");'>&times;</button>"+
										"<label>Attach a file:</label>"+
										"<table><tr>"+
											"<td>"+
												"<input name='userFile' id='userFile"+i+"' type='file' class='demoInputBox' />"+
												"<input name='article_id' type='hidden' value='"+article_id+"'/>"+
											"</td>"+
											"<td>"+
												"<input type='submit' id='SubmitFile"+i+"' value='Upload' class='btnSubmit'/>"+
											"</td>"+
										"</tr></table>"+	
									"<div class='progress-div' style='display:none;' id='file_progress-div"+i+"'>"+
										"<div class='progress-bar' id='file_progress-bar"+i+"'></div>"+
									"</div>"+
								"</form>"+
								"<center><div id='file_loader-icon"+i+"' style='display:none;'>"+
									"<img src='img/loading.gif' /></div>"+
								"</center>"+
							"</div>";
						document.getElementById("file_attachment_layout"+i).innerHTML=file_upload_layout;
						//document.getElementById("files_content"+i).innerHTML=file_upload_layout;
						$("#uploadFileForm"+i).submit(function(e) {	
							var path = $("#userFile"+i).val();	
							var path_length = $('#userFile'+i).val().trim().length;
							
							if(path==null || path_length==0){
								$("#file_attachment_layout"+i).html("<center><br/><div class=''>"+
									"No file has been selected. Please select one."+
									"<button type='button' class='close' "+
									"onclick='attachFile(\""+i+"\");'>&times;</button>"+
									"</div></center>");
								return false;
							}
							else if(is_valid_file(path)==false){
								$("#file_attachment_layout"+i).html("<br/><div class=''>"+
									"Unsupported file type, please select one of the supported files as listed below:<br/>"+
									"<p><strong>PDF, MS Word Document,PNG, CSV, SVG, Power Point(pptx), text file(txt), "+
									"JPEG, Rich text(rtf), html, Spreadsheet MS Excel(xlsx), JSON file, MP4 video file </strong></p>"+
									"<center><button type='button' class='btn' "+
									"onclick='attachFile(\""+i+"\");'>OK</button></center>"+
									"</div>");
								return false;
							}
							else{
								e.preventDefault();
								$("#file_loader-icon"+i).show();
								$("#file_progress-div"+i).show();
								$(this).ajaxSubmit({ 
									beforeSubmit: function() {
									  $("#file_progress-bar"+i).width('0%');
									},
									uploadProgress: function (event, position, total, percentComplete){	
										$("#file_progress-bar"+i).width(percentComplete + '%');
										$("#file_progress-bar"+i).html('<div id="file_progress-status'+i+'">' + percentComplete +' %</div>');
									},
									success:function (resp){
										//alert(resp);
										$("#file_loader-icon"+i).hide();
										var json_resp = JSON.parse(resp);
										if(json_resp.status==true){
											files_path[i]=json_resp.files_storage_path;
											refreshFileLayout(i);
										}
										else{
											$("#file_attachment_layout"+i).html("<center><br/><div class=''>"+
												json_resp.message+
												"<button type='button' class='close' "+
													"onclick='attachFile(\""+i+"\");'>&times;</button>"+
													"</div></center>");
										}
									},
									resetForm: true 
								}); 
								return false; 
							}
						});
					}
										
					/*js for uploading image file*/
					function uploadImage(i){
						var article_id = document.getElementById("article_id"+i).value;
						
						var image_upload_layout=""+
							"<div class='select_img_bg'>"+
							"<form id='uploadForm"+i+"' action='upload.php' method='post'>"+
								"<div id='targetLayer"+i+"'></div>"+
								"<button type='button' class='close' "+
									"onclick='closeImageUpload(\""+i+"\");'>&times;</button>"+
									"<label>Upload an image:</label>"+
									"<table><tr>"+
										"<td>"+
											"<input name='userImage' id='userImage"+i+"' type='file' class='demoInputBox' />"+
											"<input name='article_id' type='hidden' value='"+article_id+"'/>"+
										"</td>"+
										"<td>"+
											"<input type='submit' id='SubmitPhoto"+i+"' value='Upload' class='btnSubmit'/>"+
										"</td>"+
									"</tr></table>"+	
								"<div class='progress-div' style='display:none;' id='progress-div"+i+"'>"+
									"<div class='progress-bar' id='progress-bar"+i+"'></div>"+
								"</div>"+
							"</form>"+
							"<center><div id='loader-icon"+i+"' style='display:none;'><img src='img/loading.gif'/></div></center>"+
							"</div>";
						document.getElementById("image_content"+i).innerHTML=image_upload_layout;
						$("#uploadForm"+i).submit(function(e) {	
							var img_path = $("#userImage"+i).val();
							var Extension = img_path.substring(img_path.lastIndexOf('.') + 1).toLowerCase();
							var path_length = $('#userImage'+i).val().trim().length;
							
							if(img_path==null || path_length==0){
								$("#image_content"+i).html("<center><div class='alert alert-danger'>"+
									"Please select an image."+
									"<button type='button' class='close' "+
									"onclick='uploadImage(\""+i+"\");'>&times;</button>"+
									"</div></center>");
								return false;
							}
							else if(!(Extension == "gif" || Extension == "png" || Extension == "bmp" || Extension == "jpeg" || Extension == "jpg")){
								$("#image_content"+i).html("<center><div class='alert alert-danger'>"+
									"Not a valid image file.."+
									"<button type='button' class='close' "+
									"onclick='uploadImage(\""+i+"\");'>&times;</button>"+
									"</div></center>");
								return false;
							}
							else{
								e.preventDefault();
								$("#loader-icon"+i).show();
								$("#progress-div"+i).show();
								$(this).ajaxSubmit({
									url: "upload.php", 
									beforeSubmit: function() {
									  $("#progress-bar"+i).width('0%');
									},
									uploadProgress: function (event, position, total, percentComplete){	
										$("#progress-bar"+i).width(percentComplete + '%');
										$("#progress-bar"+i).html('<div id="progress-status'+i+'">' + percentComplete +' %</div>');
									},
									success:function (resp){
										$("#loader-icon"+i).hide();
										var json_resp = JSON.parse(resp);
										if(json_resp.status==true){
											image_path[i]=json_resp.image_path;
											$("#image_content"+i).html("<img src='"+image_path[i]+"' width='100%' height='80%'/>");
										}
										else{
											$("#image_content"+i).html("<center>"+json_resp.message+"</center>");
										}
									},
									resetForm: true 
								}); 
								return false; 
							}
						});
					}
					
					function closeImageUpload(i){
						var image = image_path[i];
						//alert(image);
						if(image==null || image=="") {
							document.getElementById("image_content"+i).innerHTML="";	
						}
						else{
						document.getElementById("image_content"+i).innerHTML="<center><img src='"+image+
											"' height='80%' width='100%'/></center>";
						}
					}
					function closeFileUpload(i){
						document.getElementById("file_attachment_layout"+i).innerHTML="";
					}
					
					function refreshFileLayout(i){
						document.getElementById("files_content"+i).innerHTML=getFiles(i);
						document.getElementById("file_attachment_layout"+i).innerHTML="";
					}
					function deleteArticle(i){
						var article_id = document.getElementById("article_id"+i).value;
						swal({   
							title: "Are you sure?", 
							text: "Once it is deleted, you will not be able to recover it!",   
							type: "warning",   
							showCancelButton: true,   
							confirmButtonColor: "#DD6B55",   
							confirmButtonText: "DONE",   
							cancelButtonText: "CANCEL",   
							closeOnConfirm: false,   
							closeOnCancel: false 
						}, 
						function(isConfirm){   
							if (isConfirm) {     
								$.ajax({
									type: "POST",
									url: "deleteArticle.php",
									data: "article_id="+article_id,
									success:function(resp){
										var json_resp=JSON.parse(resp);
										if(json_resp.status==true){
											swal("Deleted!", json_resp.message, "success"); 
											getArticles(tab_id);
											//Toast.success(json_resp.message, ' ', {displayDuration: 3000});
										}
										else{
											swal("Failed!", json_resp.message, "error");
											//Toast.error(json_resp.message, ' ');
										}
									}
								});  
							} else {     
								//swal(" ", "Your article is safe now.", "error"); 
								swal({   
									title: "Deletion Cancelled!",  
									text: "Your article is safe now.",   
									timer: 1000,   
									showConfirmButton: false 
								});  
								//Toast.success("Your article is not deleted, it is safe now.", ' ', {displayDuration: 3000});
							} 
						});
					}
					
					function resetArticle(){
						document.getElementById("title").value="";
						document.getElementById("textual_content").value="";
						document.getElementById("link").value="";
						document.getElementById("createArticleResp").innerHTML="";
					}
					/*js for extracting file name from a given file path with file name*/
					function extractFileName(path){
						var index=0;
						var filename="";
						for(var i=0;i<path.length;i++){
							if(path[i]=='/'){
								index=i;
							}
						}
						var i=index==0?0:index+1;
						for(;i<path.length;i++){
							filename=filename+path[i];
						}
						return filename;
					}
				</script>
			</div>
        </div>
        <!-- /#page-content-wrapper -->
        <script>
		/* jquery.form.min.js */
		(function(e){"use strict";if(typeof define==="function"&&define.amd){define(["jquery"],e)}else{e(typeof jQuery!="undefined"?jQuery:window.Zepto)}})(function(e){"use strict";function r(t){var n=t.data;if(!t.isDefaultPrevented()){t.preventDefault();e(t.target).ajaxSubmit(n)}}function i(t){var n=t.target;var r=e(n);if(!r.is("[type=submit],[type=image]")){var i=r.closest("[type=submit]");if(i.length===0){return}n=i[0]}var s=this;s.clk=n;if(n.type=="image"){if(t.offsetX!==undefined){s.clk_x=t.offsetX;s.clk_y=t.offsetY}else if(typeof e.fn.offset=="function"){var o=r.offset();s.clk_x=t.pageX-o.left;s.clk_y=t.pageY-o.top}else{s.clk_x=t.pageX-n.offsetLeft;s.clk_y=t.pageY-n.offsetTop}}setTimeout(function(){s.clk=s.clk_x=s.clk_y=null},100)}function s(){if(!e.fn.ajaxSubmit.debug){return}var t="[jquery.form] "+Array.prototype.join.call(arguments,"");if(window.console&&window.console.log){window.console.log(t)}else if(window.opera&&window.opera.postError){window.opera.postError(t)}}var t={};t.fileapi=e("<input type='file'/>").get(0).files!==undefined;t.formdata=window.FormData!==undefined;var n=!!e.fn.prop;e.fn.attr2=function(){if(!n){return this.attr.apply(this,arguments)}var e=this.prop.apply(this,arguments);if(e&&e.jquery||typeof e==="string"){return e}return this.attr.apply(this,arguments)};e.fn.ajaxSubmit=function(r){function k(t){var n=e.param(t,r.traditional).split("&");var i=n.length;var s=[];var o,u;for(o=0;o<i;o++){n[o]=n[o].replace(/\+/g," ");u=n[o].split("=");s.push([decodeURIComponent(u[0]),decodeURIComponent(u[1])])}return s}function L(t){var n=new FormData;for(var s=0;s<t.length;s++){n.append(t[s].name,t[s].value)}if(r.extraData){var o=k(r.extraData);for(s=0;s<o.length;s++){if(o[s]){n.append(o[s][0],o[s][1])}}}r.data=null;var u=e.extend(true,{},e.ajaxSettings,r,{contentType:false,processData:false,cache:false,type:i||"POST"});if(r.uploadProgress){u.xhr=function(){var t=e.ajaxSettings.xhr();if(t.upload){t.upload.addEventListener("progress",function(e){var t=0;var n=e.loaded||e.position;var i=e.total;if(e.lengthComputable){t=Math.ceil(n/i*100)}r.uploadProgress(e,n,i,t)},false)}return t}}u.data=null;var a=u.beforeSend;u.beforeSend=function(e,t){if(r.formData){t.data=r.formData}else{t.data=n}if(a){a.call(this,e,t)}};return e.ajax(u)}function A(t){function T(e){var t=null;try{if(e.contentWindow){t=e.contentWindow.document}}catch(n){s("cannot get iframe.contentWindow document: "+n)}if(t){return t}try{t=e.contentDocument?e.contentDocument:e.document}catch(n){s("cannot get iframe.contentDocument: "+n);t=e.document}return t}function k(){function f(){try{var e=T(v).readyState;s("state = "+e);if(e&&e.toLowerCase()=="uninitialized"){setTimeout(f,50)}}catch(t){s("Server abort: ",t," (",t.name,")");_(x);if(w){clearTimeout(w)}w=undefined}}var t=a.attr2("target"),n=a.attr2("action"),r="multipart/form-data",u=a.attr("enctype")||a.attr("encoding")||r;o.setAttribute("target",p);if(!i||/post/i.test(i)){o.setAttribute("method","POST")}if(n!=l.url){o.setAttribute("action",l.url)}if(!l.skipEncodingOverride&&(!i||/post/i.test(i))){a.attr({encoding:"multipart/form-data",enctype:"multipart/form-data"})}if(l.timeout){w=setTimeout(function(){b=true;_(S)},l.timeout)}var c=[];try{if(l.extraData){for(var h in l.extraData){if(l.extraData.hasOwnProperty(h)){if(e.isPlainObject(l.extraData[h])&&l.extraData[h].hasOwnProperty("name")&&l.extraData[h].hasOwnProperty("value")){c.push(e('<input type="hidden" name="'+l.extraData[h].name+'">').val(l.extraData[h].value).appendTo(o)[0])}else{c.push(e('<input type="hidden" name="'+h+'">').val(l.extraData[h]).appendTo(o)[0])}}}}if(!l.iframeTarget){d.appendTo("body")}if(v.attachEvent){v.attachEvent("onload",_)}else{v.addEventListener("load",_,false)}setTimeout(f,15);try{o.submit()}catch(m){var g=document.createElement("form").submit;g.apply(o)}}finally{o.setAttribute("action",n);o.setAttribute("enctype",u);if(t){o.setAttribute("target",t)}else{a.removeAttr("target")}e(c).remove()}}function _(t){if(m.aborted||M){return}A=T(v);if(!A){s("cannot access response document");t=x}if(t===S&&m){m.abort("timeout");E.reject(m,"timeout");return}else if(t==x&&m){m.abort("server abort");E.reject(m,"error","server abort");return}if(!A||A.location.href==l.iframeSrc){if(!b){return}}if(v.detachEvent){v.detachEvent("onload",_)}else{v.removeEventListener("load",_,false)}var n="success",r;try{if(b){throw"timeout"}var i=l.dataType=="xml"||A.XMLDocument||e.isXMLDoc(A);s("isXml="+i);if(!i&&window.opera&&(A.body===null||!A.body.innerHTML)){if(--O){s("requeing onLoad callback, DOM not available");setTimeout(_,250);return}}var o=A.body?A.body:A.documentElement;m.responseText=o?o.innerHTML:null;m.responseXML=A.XMLDocument?A.XMLDocument:A;if(i){l.dataType="xml"}m.getResponseHeader=function(e){var t={"content-type":l.dataType};return t[e.toLowerCase()]};if(o){m.status=Number(o.getAttribute("status"))||m.status;m.statusText=o.getAttribute("statusText")||m.statusText}var u=(l.dataType||"").toLowerCase();var a=/(json|script|text)/.test(u);if(a||l.textarea){var f=A.getElementsByTagName("textarea")[0];if(f){m.responseText=f.value;m.status=Number(f.getAttribute("status"))||m.status;m.statusText=f.getAttribute("statusText")||m.statusText}else if(a){var c=A.getElementsByTagName("pre")[0];var p=A.getElementsByTagName("body")[0];if(c){m.responseText=c.textContent?c.textContent:c.innerText}else if(p){m.responseText=p.textContent?p.textContent:p.innerText}}}else if(u=="xml"&&!m.responseXML&&m.responseText){m.responseXML=D(m.responseText)}try{L=H(m,u,l)}catch(g){n="parsererror";m.error=r=g||n}}catch(g){s("error caught: ",g);n="error";m.error=r=g||n}if(m.aborted){s("upload aborted");n=null}if(m.status){n=m.status>=200&&m.status<300||m.status===304?"success":"error"}if(n==="success"){if(l.success){l.success.call(l.context,L,"success",m)}E.resolve(m.responseText,"success",m);if(h){e.event.trigger("ajaxSuccess",[m,l])}}else if(n){if(r===undefined){r=m.statusText}if(l.error){l.error.call(l.context,m,n,r)}E.reject(m,"error",r);if(h){e.event.trigger("ajaxError",[m,l,r])}}if(h){e.event.trigger("ajaxComplete",[m,l])}if(h&&!--e.active){e.event.trigger("ajaxStop")}if(l.complete){l.complete.call(l.context,m,n)}M=true;if(l.timeout){clearTimeout(w)}setTimeout(function(){if(!l.iframeTarget){d.remove()}else{d.attr("src",l.iframeSrc)}m.responseXML=null},100)}var o=a[0],u,f,l,h,p,d,v,m,g,y,b,w;var E=e.Deferred();E.abort=function(e){m.abort(e)};if(t){for(f=0;f<c.length;f++){u=e(c[f]);if(n){u.prop("disabled",false)}else{u.removeAttr("disabled")}}}l=e.extend(true,{},e.ajaxSettings,r);l.context=l.context||l;p="jqFormIO"+(new Date).getTime();if(l.iframeTarget){d=e(l.iframeTarget);y=d.attr2("name");if(!y){d.attr2("name",p)}else{p=y}}else{d=e('<iframe name="'+p+'" src="'+l.iframeSrc+'" />');d.css({position:"absolute",top:"-1000px",left:"-1000px"})}v=d[0];m={aborted:0,responseText:null,responseXML:null,status:0,statusText:"n/a",getAllResponseHeaders:function(){},getResponseHeader:function(){},setRequestHeader:function(){},abort:function(t){var n=t==="timeout"?"timeout":"aborted";s("aborting upload... "+n);this.aborted=1;try{if(v.contentWindow.document.execCommand){v.contentWindow.document.execCommand("Stop")}}catch(r){}d.attr("src",l.iframeSrc);m.error=n;if(l.error){l.error.call(l.context,m,n,t)}if(h){e.event.trigger("ajaxError",[m,l,n])}if(l.complete){l.complete.call(l.context,m,n)}}};h=l.global;if(h&&0===e.active++){e.event.trigger("ajaxStart")}if(h){e.event.trigger("ajaxSend",[m,l])}if(l.beforeSend&&l.beforeSend.call(l.context,m,l)===false){if(l.global){e.active--}E.reject();return E}if(m.aborted){E.reject();return E}g=o.clk;if(g){y=g.name;if(y&&!g.disabled){l.extraData=l.extraData||{};l.extraData[y]=g.value;if(g.type=="image"){l.extraData[y+".x"]=o.clk_x;l.extraData[y+".y"]=o.clk_y}}}var S=1;var x=2;var N=e("meta[name=csrf-token]").attr("content");var C=e("meta[name=csrf-param]").attr("content");if(C&&N){l.extraData=l.extraData||{};l.extraData[C]=N}if(l.forceSync){k()}else{setTimeout(k,10)}var L,A,O=50,M;var D=e.parseXML||function(e,t){if(window.ActiveXObject){t=new ActiveXObject("Microsoft.XMLDOM");t.async="false";t.loadXML(e)}else{t=(new DOMParser).parseFromString(e,"text/xml")}return t&&t.documentElement&&t.documentElement.nodeName!="parsererror"?t:null};var P=e.parseJSON||function(e){return window["eval"]("("+e+")")};var H=function(t,n,r){var i=t.getResponseHeader("content-type")||"",s=n==="xml"||!n&&i.indexOf("xml")>=0,o=s?t.responseXML:t.responseText;if(s&&o.documentElement.nodeName==="parsererror"){if(e.error){e.error("parsererror")}}if(r&&r.dataFilter){o=r.dataFilter(o,n)}if(typeof o==="string"){if(n==="json"||!n&&i.indexOf("json")>=0){o=P(o)}else if(n==="script"||!n&&i.indexOf("javascript")>=0){e.globalEval(o)}}return o};return E}if(!this.length){s("ajaxSubmit: skipping submit process - no element selected");return this}var i,o,u,a=this;if(typeof r=="function"){r={success:r}}else if(r===undefined){r={}}i=r.type||this.attr2("method");o=r.url||this.attr2("action");u=typeof o==="string"?e.trim(o):"";u=u||window.location.href||"";if(u){u=(u.match(/^([^#]+)/)||[])[1]}r=e.extend(true,{url:u,success:e.ajaxSettings.success,type:i||e.ajaxSettings.type,iframeSrc:/^https/i.test(window.location.href||"")?"javascript:false":"about:blank"},r);var f={};this.trigger("form-pre-serialize",[this,r,f]);if(f.veto){s("ajaxSubmit: submit vetoed via form-pre-serialize trigger");return this}if(r.beforeSerialize&&r.beforeSerialize(this,r)===false){s("ajaxSubmit: submit aborted via beforeSerialize callback");return this}var l=r.traditional;if(l===undefined){l=e.ajaxSettings.traditional}var c=[];var h,p=this.formToArray(r.semantic,c);if(r.data){r.extraData=r.data;h=e.param(r.data,l)}if(r.beforeSubmit&&r.beforeSubmit(p,this,r)===false){s("ajaxSubmit: submit aborted via beforeSubmit callback");return this}this.trigger("form-submit-validate",[p,this,r,f]);if(f.veto){s("ajaxSubmit: submit vetoed via form-submit-validate trigger");return this}var d=e.param(p,l);if(h){d=d?d+"&"+h:h}if(r.type.toUpperCase()=="GET"){r.url+=(r.url.indexOf("?")>=0?"&":"?")+d;r.data=null}else{r.data=d}var v=[];if(r.resetForm){v.push(function(){a.resetForm()})}if(r.clearForm){v.push(function(){a.clearForm(r.includeHidden)})}if(!r.dataType&&r.target){var m=r.success||function(){};v.push(function(t){var n=r.replaceTarget?"replaceWith":"html";e(r.target)[n](t).each(m,arguments)})}else if(r.success){v.push(r.success)}r.success=function(e,t,n){var i=r.context||this;for(var s=0,o=v.length;s<o;s++){v[s].apply(i,[e,t,n||a,a])}};if(r.error){var g=r.error;r.error=function(e,t,n){var i=r.context||this;g.apply(i,[e,t,n,a])}}if(r.complete){var y=r.complete;r.complete=function(e,t){var n=r.context||this;y.apply(n,[e,t,a])}}var b=e("input[type=file]:enabled",this).filter(function(){return e(this).val()!==""});var w=b.length>0;var E="multipart/form-data";var S=a.attr("enctype")==E||a.attr("encoding")==E;var x=t.fileapi&&t.formdata;s("fileAPI :"+x);var T=(w||S)&&!x;var N;if(r.iframe!==false&&(r.iframe||T)){if(r.closeKeepAlive){e.get(r.closeKeepAlive,function(){N=A(p)})}else{N=A(p)}}else if((w||S)&&x){N=L(p)}else{N=e.ajax(r)}a.removeData("jqxhr").data("jqxhr",N);for(var C=0;C<c.length;C++){c[C]=null}this.trigger("form-submit-notify",[this,r]);return this};e.fn.ajaxForm=function(t){t=t||{};t.delegation=t.delegation&&e.isFunction(e.fn.on);if(!t.delegation&&this.length===0){var n={s:this.selector,c:this.context};if(!e.isReady&&n.s){s("DOM not ready, queuing ajaxForm");e(function(){e(n.s,n.c).ajaxForm(t)});return this}s("terminating; zero elements found by selector"+(e.isReady?"":" (DOM not ready)"));return this}if(t.delegation){e(document).off("submit.form-plugin",this.selector,r).off("click.form-plugin",this.selector,i).on("submit.form-plugin",this.selector,t,r).on("click.form-plugin",this.selector,t,i);return this}return this.ajaxFormUnbind().bind("submit.form-plugin",t,r).bind("click.form-plugin",t,i)};e.fn.ajaxFormUnbind=function(){return this.unbind("submit.form-plugin click.form-plugin")};e.fn.formToArray=function(n,r){var i=[];if(this.length===0){return i}var s=this[0];var o=this.attr("id");var u=n?s.getElementsByTagName("*"):s.elements;var a;if(u&&!/MSIE [678]/.test(navigator.userAgent)){u=e(u).get()}if(o){a=e(':input[form="'+o+'"]').get();if(a.length){u=(u||[]).concat(a)}}if(!u||!u.length){return i}var f,l,c,h,p,d,v;for(f=0,d=u.length;f<d;f++){p=u[f];c=p.name;if(!c||p.disabled){continue}if(n&&s.clk&&p.type=="image"){if(s.clk==p){i.push({name:c,value:e(p).val(),type:p.type});i.push({name:c+".x",value:s.clk_x},{name:c+".y",value:s.clk_y})}continue}h=e.fieldValue(p,true);if(h&&h.constructor==Array){if(r){r.push(p)}for(l=0,v=h.length;l<v;l++){i.push({name:c,value:h[l]})}}else if(t.fileapi&&p.type=="file"){if(r){r.push(p)}var m=p.files;if(m.length){for(l=0;l<m.length;l++){i.push({name:c,value:m[l],type:p.type})}}else{i.push({name:c,value:"",type:p.type})}}else if(h!==null&&typeof h!="undefined"){if(r){r.push(p)}i.push({name:c,value:h,type:p.type,required:p.required})}}if(!n&&s.clk){var g=e(s.clk),y=g[0];c=y.name;if(c&&!y.disabled&&y.type=="image"){i.push({name:c,value:g.val()});i.push({name:c+".x",value:s.clk_x},{name:c+".y",value:s.clk_y})}}return i};e.fn.formSerialize=function(t){return e.param(this.formToArray(t))};e.fn.fieldSerialize=function(t){var n=[];this.each(function(){var r=this.name;if(!r){return}var i=e.fieldValue(this,t);if(i&&i.constructor==Array){for(var s=0,o=i.length;s<o;s++){n.push({name:r,value:i[s]})}}else if(i!==null&&typeof i!="undefined"){n.push({name:this.name,value:i})}});return e.param(n)};e.fn.fieldValue=function(t){for(var n=[],r=0,i=this.length;r<i;r++){var s=this[r];var o=e.fieldValue(s,t);if(o===null||typeof o=="undefined"||o.constructor==Array&&!o.length){continue}if(o.constructor==Array){e.merge(n,o)}else{n.push(o)}}return n};e.fieldValue=function(t,n){var r=t.name,i=t.type,s=t.tagName.toLowerCase();if(n===undefined){n=true}if(n&&(!r||t.disabled||i=="reset"||i=="button"||(i=="checkbox"||i=="radio")&&!t.checked||(i=="submit"||i=="image")&&t.form&&t.form.clk!=t||s=="select"&&t.selectedIndex==-1)){return null}if(s=="select"){var o=t.selectedIndex;if(o<0){return null}var u=[],a=t.options;var f=i=="select-one";var l=f?o+1:a.length;for(var c=f?o:0;c<l;c++){var h=a[c];if(h.selected){var p=h.value;if(!p){p=h.attributes&&h.attributes.value&&!h.attributes.value.specified?h.text:h.value}if(f){return p}u.push(p)}}return u}return e(t).val()};e.fn.clearForm=function(t){return this.each(function(){e("input,select,textarea",this).clearFields(t)})};e.fn.clearFields=e.fn.clearInputs=function(t){var n=/^(?:color|date|datetime|email|month|number|password|range|search|tel|text|time|url|week)$/i;return this.each(function(){var r=this.type,i=this.tagName.toLowerCase();if(n.test(r)||i=="textarea"){this.value=""}else if(r=="checkbox"||r=="radio"){this.checked=false}else if(i=="select"){this.selectedIndex=-1}else if(r=="file"){if(/MSIE/.test(navigator.userAgent)){e(this).replaceWith(e(this).clone(true))}else{e(this).val("")}}else if(t){if(t===true&&/hidden/.test(r)||typeof t=="string"&&e(this).is(t)){this.value=""}}})};e.fn.resetForm=function(){return this.each(function(){if(typeof this.reset=="function"||typeof this.reset=="object"&&!this.reset.nodeType){this.reset()}})};e.fn.enable=function(e){if(e===undefined){e=true}return this.each(function(){this.disabled=!e})};e.fn.selected=function(t){if(t===undefined){t=true}return this.each(function(){var n=this.type;if(n=="checkbox"||n=="radio"){this.checked=t}else if(this.tagName.toLowerCase()=="option"){var r=e(this).parent("select");if(t&&r[0]&&r[0].type=="select-one"){r.find("option").selected(false)}this.selected=t}})};e.fn.ajaxSubmit.debug=false})
		</script>

		
    </div>
    <!-- /#wrapper -->
    <!-- Toast Examples
					<ul class="list">
					  <li><a href="#" onclick="Toast.success('Message')">Success</a></li>
					  <li><a href="#" onclick="Toast.success('Message', 'Title', {displayDuration: 0})">Sticky success
						with title</a></li>
					  <li><a href="#" onclick="Toast.info('Message', '', {displayDuration: 0})">Sticky info</a></li>
					  <li><a href="#"
							 onclick="Toast.defaults.displayDuration=500; Toast.info('Default displayDuration 500ms', 'Title')">Info:
						Change displayDuration to 200ms</a></li>
					  <li><a href="#"
							 onclick="Toast.defaults.displayDuration=2000; Toast.warning('Default displayDuration 2000ms')">Warning:
						Change displayDuration to 2000ms</a></li>
					  <li><a href="#" onclick="Toast.warning('Message', 'Title')">Warning with title</a></li>
					  <li><a href="#" onclick="Toast.error('Message')">Error</a></li>
					  <li><a href="#" onclick="Toast.error('Message', 'Title')">Error with title</a></li>
					  <li><a href="#" onclick="Toast.defaults.width='600px'; Toast.info('Message', 'Title')">Info with
						title: Changed default width to 600px</a></li>
					  <li><a href="#" onclick="Toast.defaults.width='200px'; Toast.info('Message', 'Title')">Info with
						title: Changed default width to 200px</a></li>
					</ul>
	-->
	</body>
	<!-- Modal for creating article -->
	<div class="modal fade" id="createArticle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h4 class="modal-title">Create an article:</h4>
				</div>
				<div class="modal-body">
				  <form class="form-horizontal" role="form" method="post" action="#">
					 <div class="form-group">	
							<div class="col-sm-12">
								<label for="title" class="control-label">Name:</label>
								<input type="text" class="form-control" value="" name="title" id="title"
										placeholder="Name of the article">
							</div>

							<div class="col-sm-12">
								<label for="textual_content" class="control-label">Say something about the article:</label>
								<textarea class="form-control" name="textual_content" id="textual_content" rows="6" cols="40"></textarea>
							</div>
						
						
							<div class="col-sm-12">
								<label for="link" class="control-label">Link:</label>
								<input type="text" class="form-control" value="" name="link" id="link"
										placeholder="Paste here any link related to the article">
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<center><label id="createArticleResp" class="col-sm-offset-2 col-sm-8"></label></center>
					<button type="submit" onclick='createArticle();' class="btn btn-info">Create</button>
				</div>
			 </div>
		</div>
	</div>
	<div class="modal fade" id="Editlink" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  style='vertical-align: middle'>
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<input type='hidden' id='article_ID'/>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div style='min-height:200px;vertical-align:middle'>
						<label for='article_link' id='edit_link_label'><h3>Edit the link below:</h3></label>
						<br/><br/>
						<input type='text' class='form-control' id='article_link' placeholder='http://www.domain.com'/>
						<br/>
						<div>
							<center>
								<button type="button" style='width:40%' onclick='edit_link_cancel();' 
									class="btn" data-dismiss="modal" aria-label="Close">CANCEL</button>
								&nbsp;&nbsp;
								<button type="button"  style='width:40%' onclick='edit_link_done();' 
									class="btn" style="width:20%" id="saveLink">
									DONE</button>
							</center>
						</div>
						<br/>
						<center>
							<div id='editLinkResponse'></div>
						</center>
					</div>
				</div>	
			</div>
		</div>
	</div>
	
</html>
