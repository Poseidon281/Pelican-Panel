$.urlParam=function(name){var results=new RegExp("[\\?&]"+name+"=([^&#]*)").exec(decodeURIComponent(window.location.href));if(results==null){return null}else{return results[1]||0}};function getPageName(url){var index=url.lastIndexOf("/")+1;var filenameWithExtension=url.substr(index);var filename=filenameWithExtension.split(".")[0];return filename}
// Remember Active Tab and Navigate to it on Reload
for(var queryParameters={},queryString=location.search.substring(1),re=/([^&=]+)=([^&]*)/g,m;m=re.exec(queryString);)queryParameters[decodeURIComponent(m[1])]=decodeURIComponent(m[2]);$("a[data-toggle='tab']").click(function(){queryParameters.tab=$(this).attr("href").substring(1),window.history.pushState(null,null,location.pathname+"?"+$.param(queryParameters))});
if($.urlParam('tab') != null){$('.nav.nav-tabs a[href="#' + $.urlParam('tab') + '"]').tab('show');}