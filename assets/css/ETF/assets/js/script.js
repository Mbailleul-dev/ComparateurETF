var $window = $(window),
  sections = $("section"),
  showcase__link = $(".showcase__link"),
  showcasesLength = sections.length - 1,
  currentIndex = 0,
  sectionZIndex = 10,
  canScroll = true,
  footerReveal = false;

$window.onload = loadShowcases();
$window.on("mousewheel DOMMouseScroll", onMouseWheel);

function onMouseWheel(event) {
  var delta =
    event.originalEvent.wheelDelta / 30 || -event.originalEvent.detail;
  if (delta < 0 && currentIndex < showcasesLength) {
    if (canScroll) {
      canScroll = false;
      sections[currentIndex].moveSection.play();
      currentIndex++;
    }
  } else if (delta < 0 && currentIndex === showcasesLength && !footerReveal) {
    if (canScroll) {
      canScroll = false;
      footerReveal = true;
      TweenLite.to(sections[currentIndex], 0.5, {
        y: -$(sections[currentIndex])
          .parent()
          .next("footer")
          .height(),
        ease: Power1.easeInOut,
        onComplete: onSlideCompleteEnd
      });
    }
  } else if (delta > 0 && currentIndex > 0 && !footerReveal) {
    if (canScroll) {
      canScroll = false;
      currentIndex--;
      sections[currentIndex].moveSection.reverse();
    }
  } else if (delta > 0 && currentIndex === showcasesLength) {
    if (canScroll) {
      canScroll = false;
      footerReveal = false;
      TweenLite.to(sections[currentIndex], 0.5, {
        y: 0,
        ease: Power1.easeInOut,
        onComplete: onSlideCompleteEnd
      });
    }
  }
  event.preventDefault();
}

function loadShowcases() {
  $window.scrollTop(0);
  sections.eq(currentIndex).addClass("active");
  sections.each(function(value) {
    $(this).css({ "z-index": sectionZIndex-- });
  });
  if (sections.parent().next("footer")) {
    $("footer").css({ "z-index": sectionZIndex });
  }
}

function onSlideCompleteEnd() {
  canScroll = true;
  console.log("canScroll: " + canScroll);
}

for (var i = 0; i < sections.length; i++) {
  sections[i].moveSection = TweenLite.to(sections[i], 1, {
    yPercent: -100,
    ease: Power4.easeInOut,
    onComplete: onSlideCompleteEnd,
    onReverseComplete: onSlideCompleteEnd,
    paused: true
  });
}
