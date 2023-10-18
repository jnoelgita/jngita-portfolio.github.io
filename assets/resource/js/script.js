$(window).scroll(function(){
    $('nav').toggleClass('scrolled', $(this).scrollTop() >200);
});

$(document).ready(function() {
    const navLinks = $("a.nav-link");
    const sections = $(".sections");
  
    const observerOptions = {
      root: null,
      rootMargin: "0px",
      threshold: 0.5
    };
  
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const targetId = entry.target.id;
          const activeNavLink = navLinks.filter(`[href="#${targetId}"]`);
  
          navLinks.removeClass("active");
          activeNavLink.addClass("active");
        }
      });
    }, observerOptions);
  
    sections.each((index, section) => {
      observer.observe(section);
    });
  
    // Click event handler for nav links
    $("a.nav-link").click(function() {
      $("a.nav-link").removeClass("active");
      $(this).addClass("active");
  
      // Scroll to the section
      const sectionId = $(this).attr("href");
      $('html, body').animate({
        scrollTop: $(sectionId).offset().top
      }, 50, function() {
        observer.disconnect(); // Disconnect the observer temporarily
        // Re-observe the sections after scrolling is complete
        sections.each((index, section) => {
          observer.observe(section);
        });
      });
  
      return false;
    });
  
    // Update nav link when scrolling back to the top
    $(window).scroll(function() {
      const scrollPosition = $(window).scrollTop();
      if (scrollPosition === 0) {
        $("a.nav-item").removeClass("active");
        navLinks.first().addClass("active");
      }
    });
  });
  
  
  
  $(function () {
      $('.chart').easyPieChart({
        size: 160,
        barColor: "#ff869e",
        scaleLength: 0,
        lineWidth: 10,
        trackColor: "#373737",
        lineCap: "circle",
        animate: 2000,
      });
    });
