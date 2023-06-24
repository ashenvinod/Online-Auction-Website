function openCat(evt, catName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    console.log(tabcontent);
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(catName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();

  function setCountDown() {
    const targetTime = new Date("June 1, 2022");
  
    // Update count down in every 1 second
    const interval = setInterval(function () {
      const current = new Date().getTime();
  
      const difference = targetTime - current;
      const daysDifference = Math.floor(difference / (1000 * 60 * 60 * 24));
      const hoursDifference = Math.floor(
        (difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
      );
      const minutesDifference = Math.floor(
        (difference % (1000 * 60 * 60)) / (1000 * 60)
      );
      const secondsDifference = Math.floor((difference % (1000 * 60)) / 1000);
  
      const countDownText = `Auction ends in: ${daysDifference}d :${hoursDifference}h :${minutesDifference}m :${secondsDifference}s`;
  
      document.getElementById("countdown-text").innerHTML = countDownText;
    }, 1000);
  }

  setCountDown();