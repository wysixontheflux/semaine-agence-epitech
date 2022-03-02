  document.getElementById("pressme").onclick = function() {
      document.styleSheets[4].disabled = !document.styleSheets[3].disabled;
      document.styleSheets[3].disabled = !document.styleSheets[4].disabled;
    }