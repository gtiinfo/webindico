function initFreshChat() {
    window.fcWidget.init({
                token: "3b8de23f-a663-46e0-bebe-350ab5adf203",
               host: "https://indicoseguros.freshchat.com"
    });
  }
  function initialize(i,t){var e;i.getElementById(t)?
  initFreshChat():((e=i.createElement("script")).id=t,e.async=!0,
  e.src="https://indicoseguros.freshchat.com/js/widget.js",e.onload=initFreshChat,i.head.appendChild(e))}
  function initiateCall(){initialize(document,"Freshchat-js-sdk")}
  window.addEventListener?window.addEventListener("load",initiateCall,!1):
  window.attachEvent("load",initiateCall,!1);
  
  