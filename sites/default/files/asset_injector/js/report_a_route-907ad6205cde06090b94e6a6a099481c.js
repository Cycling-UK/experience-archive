// This code gets the current node ID and title so it can be used as a referral string for the "Report this route" webform.
// https://www.drupal.org/project/webform/issues/3084731

// Listen DOM changes
let observer = new MutationObserver((mutations) => {
  mutations.forEach((mutation) => {
    let oldValue = mutation.oldValue;
    let newValue = mutation.target.textContent;
    if (oldValue !== newValue) {
      
      // Check for new element
      var element =  document.getElementById('target-link');
      if (typeof(element) != 'undefined' && element != null)
      {
        // Set page title and url parameters to pass to webform
        // var Base_URL = "/form/feedback?page_url="+window.location.pathname+"&page_title="+document.title;
        var Base_URL = "/form/report-this-route?node_url="+window.location.pathname+"&node_title="+document.title;
        document.getElementById("target-link").setAttribute("href", Base_URL);
      }
    }
  });
});

observer.observe(document.body, {
  characterDataOldValue: true, 
  subtree: true, 
  childList: true, 
  characterData: true
});
