document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });
   // Or with jQuery
   $(document).ready(function(){
    $('.sidenav').sidenav();
});

$(document).ready(function(){
   $('.modal').modal();
   $('.dropdown-trigger').dropdown({
    inDuration: 300,
    outDuration: 225,
    constrainWidth: true, // Does not change width of dropdown to that of the activator
    hover: true, // Activate on hover
    gutter: 0, // Spacing from edge
    belowOrigin: true, // Displays dropdown below the button
    alignment: 'left', // Displays dropdown with edge aligned to the left of button
    stopPropagation: false, // Stops event propagation
    coverTrigger: false
  }
);
});

$(document).ready(function(){
   $('.modal').modal();
   $('.dropdown-trigger').dropdown({
    inDuration: 300,
    outDuration: 225,
    constrainWidth: true, // Does not change width of dropdown to that of the activator
    hover: true, // Activate on hover
    gutter: 0, // Spacing from edge
    belowOrigin: true, // Displays dropdown below the button
    alignment: 'left', // Displays dropdown with edge aligned to the left of button
    stopPropagation: false, // Stops event propagation
    coverTrigger: false
  }
);
});