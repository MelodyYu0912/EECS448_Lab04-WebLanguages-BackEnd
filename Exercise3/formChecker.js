function checkServings()
{
  var dumpling = document.getElementById("dumpling").value;
  var wonton = document.getElementById("wonton").value;
  var noodles = document.getElementById("noodles").value;
  var tomato = document.getElementById("tomato").value;
  var curry = document.getElementById("curry").value;

  if ((dumpling == "")&&(wonton == "")&&(noodles == "")&&(tomato == "")&&(curry == ""))
  {
    alert ("You did not order anything.");
  }
  else
  {
    inform();
  }
}

function inform()
{
  document.getElementById("catalog").style.display = "none";
  document.getElementById("customerInformation").style.display = "block";
}

function check()
{
  var userName = document.getElementById("userName").value;
  var psw = document.getElementById("userPwd").value;
  var radionum = document.getElementsByName("shippingOption");

  let index = userName.indexOf("@");
  let com = userName.indexOf(".");

  if ((index <= 0)||(com <= index))
  {
    alert("Invalid Email");
    return false;
  }
  else if (psw == "")
  {
    alert("Password can not be blank");
    return false;
  }
  else
  {
    for (var i = 0; i < radionum.length; i++)
    {
      if (radionum[i].checked)
      {
        return true;
      }
    }

      alert("You need to pick one shipping option.");
      return false;
  }
}
