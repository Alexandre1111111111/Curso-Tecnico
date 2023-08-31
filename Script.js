function Dropbox() {
    document.getElementById("Box").classList.toggle("show");
    if (document.getElementById("Cog").style.rotate==("90deg")) {
      document.getElementById("Cog").style.rotate=("0deg");
    }
    else {
      document.getElementById("Cog").style.rotate=("90deg");
    }
  }
    window.onclick = function(event) {
    if (!event.target.matches('.sett, .Eng img')) {
      var dropdowns = document.getElementsByClassName("drop");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
          document.getElementById("Cog").style.rotate=("0deg");
        }
      }
    }
  }
  function actstr1() {
    document.getElementById("str1").src='https://cdn-icons-png.flaticon.com/512/1828/1828614.png';
    document.getElementById("str2").src='https://cdn-icons-png.flaticon.com/512/1828/1828970.png';
    document.getElementById("str3").src='https://cdn-icons-png.flaticon.com/512/1828/1828970.png';
    document.getElementById("str4").src='https://cdn-icons-png.flaticon.com/512/1828/1828970.png';
    document.getElementById("str5").src='https://cdn-icons-png.flaticon.com/512/1828/1828970.png';
  }
  function actstr12() {
    document.getElementById("str2").src='https://cdn-icons-png.flaticon.com/512/1828/1828614.png';
    document.getElementById("str1").src='https://cdn-icons-png.flaticon.com/512/1828/1828614.png';
    document.getElementById("str3").src='https://cdn-icons-png.flaticon.com/512/1828/1828970.png';
    document.getElementById("str4").src='https://cdn-icons-png.flaticon.com/512/1828/1828970.png';
    document.getElementById("str5").src='https://cdn-icons-png.flaticon.com/512/1828/1828970.png';
  }
  function actstr123() {
    document.getElementById("str3").src='https://cdn-icons-png.flaticon.com/512/1828/1828614.png';
    document.getElementById("str1").src='https://cdn-icons-png.flaticon.com/512/1828/1828614.png';
    document.getElementById("str2").src='https://cdn-icons-png.flaticon.com/512/1828/1828614.png';
    document.getElementById("str4").src='https://cdn-icons-png.flaticon.com/512/1828/1828970.png';
    document.getElementById("str5").src='https://cdn-icons-png.flaticon.com/512/1828/1828970.png';
  }
  function actstr1234() {
    document.getElementById("str4").src='https://cdn-icons-png.flaticon.com/512/1828/1828614.png';
    document.getElementById("str1").src='https://cdn-icons-png.flaticon.com/512/1828/1828614.png';
    document.getElementById("str2").src='https://cdn-icons-png.flaticon.com/512/1828/1828614.png';
    document.getElementById("str3").src='https://cdn-icons-png.flaticon.com/512/1828/1828614.png';
    document.getElementById("str5").src='https://cdn-icons-png.flaticon.com/512/1828/1828970.png';
  }
  function actstr12345() {
    document.getElementById("str1").src='https://cdn-icons-png.flaticon.com/512/1828/1828614.png';
    document.getElementById("str2").src='https://cdn-icons-png.flaticon.com/512/1828/1828614.png';
    document.getElementById("str3").src='https://cdn-icons-png.flaticon.com/512/1828/1828614.png';
    document.getElementById("str4").src='https://cdn-icons-png.flaticon.com/512/1828/1828614.png';
    document.getElementById("str5").src='https://cdn-icons-png.flaticon.com/512/1828/1828614.png';
  }
  function redef() {
    document.getElementById("str1").src='https://cdn-icons-png.flaticon.com/512/1828/1828970.png';
    document.getElementById("str2").src='https://cdn-icons-png.flaticon.com/512/1828/1828970.png';
    document.getElementById("str3").src='https://cdn-icons-png.flaticon.com/512/1828/1828970.png';
    document.getElementById("str4").src='https://cdn-icons-png.flaticon.com/512/1828/1828970.png';
    document.getElementById("str5").src='https://cdn-icons-png.flaticon.com/512/1828/1828970.png';
  }
function feedbrd() {
  let l1 = document.getElementById("l1");
  let l2 = document.getElementById("l2");
  document.getElementById("feed").style.borderColor = "#a115f1";
  l1.style.backgroundColor = "#a115f1";
  l2.style.backgroundColor = "#a115f1";
}
function feedbrdback() {
  let l1 = document.getElementById("l1");
  let l2 = document.getElementById("l2");
  document.getElementById("feed").style.borderColor = "#5016f1";
  l1.style.backgroundColor = "#5016f1";
  l2.style.backgroundColor = "#5016f1";
}
function formback() {
  let l1 = document.getElementById("li1");
  let l2 = document.getElementById("li2");
  document.getElementById("cdsform").style.borderColor = "#a115f1";
  l1.style.backgroundColor = "#a115f1";
  l2.style.backgroundColor = "#a115f1";
}
function formbdr() {
  let l1 = document.getElementById("li1");
  let l2 = document.getElementById("li2");
  document.getElementById("cdsform").style.borderColor = "#5016f1";
  l1.style.backgroundColor = "#5016f1";
  l2.style.backgroundColor = "#5016f1";
}
function formevr() {
  let l1 = document.getElementById("linha1");
  let l2 = document.getElementById("linha2");
  document.getElementById("evrform").style.borderColor = "#0000ff";
  l1.style.backgroundColor = "#0000ff";
  l2.style.backgroundColor = "#0000ff";
}
function formevrbdr() {
  let l1 = document.getElementById("linha1");
  let l2 = document.getElementById("linha2");
  document.getElementById("evrform").style.borderColor = "#5016f1";
  l1.style.backgroundColor = "#5016f1";
  l2.style.backgroundColor = "#5016f1";
}
function settbdr() {
  let l1 = document.getElementById("lin1");
  let l2 = document.getElementById("lin2");
  let l3 = document.getElementById("lin3");
  let l4 = document.getElementById("lin4");
  document.getElementById("sett").style.borderColor = "#0000ff";
  l1.style.backgroundColor = "#0000ff";
  l2.style.backgroundColor = "#0000ff";
  l3.style.backgroundColor = "#0000ff";
  l4.style.backgroundColor = "#0000ff";
}
function settlinbdr() {
  let l1 = document.getElementById("lin1");
  let l2 = document.getElementById("lin2");
  let l3 = document.getElementById("lin3");
  let l4 = document.getElementById("lin4");
  document.getElementById("sett").style.borderColor = "#004ef5";
  l1.style.backgroundColor = "#004ef5";
  l2.style.backgroundColor = "#004ef5";
  l3.style.backgroundColor = "#004ef5";
  l4.style.backgroundColor = "#004ef5";
}
function salvarm() {
  const ldes = document.getElementById("dsp");
  const configs = document.getElementById("sett");
  const configb = document.getElementById("settbody");
  if (ldes.checked) {
    configs.style.backgroundImage = "url()";
    configs.style.backgroundColor = "#000066";
    configb.style.background = "center / cover url()";
    configb.style.backgroundColor = "#0059b3";
  }
  else {
    configs.style.backgroundImage = "url(Config.jpg)";
    configb.style.background = "center / cover url(Configimg.jpg)";
  }
}
function redefm() {
  const ldes = document.getElementById("dsp");
  const ntfc = document.getElementById("not");
  ldes.checked = false;
  ntfc.checked = false;
}