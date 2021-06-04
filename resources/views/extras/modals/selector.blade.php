<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}
</style>
</head>
<body>

<h2>Select Tutor</h2>

<input type="text" id="myInput" onkeyup="myFunction()" name="name"  placeholder="Search for names.." title="Type in a name">
<ol id="myUL">
  <?php foreach ($bids as $key => $value): ?>
    <li><a href="#" id="tutor" onclick="moveNumbers({{ $value->tutorid }})">{{ $value->name}}</a></li>
  <?php endforeach; ?>
</ol>

<input type="hidden" id="tid" name="tutorid" />

<script type="text/javascript">

$(document).click(function(event) {
    var text = $(event.target).text();
    console.log(text);
    document.getElementById("myInput").value=text;
});

function moveNumbers(number){
        document.getElementById("tid").value=number;
        var txt = $('#tutor');

        console.log(number);
    }
</script>
<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent.text:not(.btn) || a.innerText.text:not(.btn);
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }


    }


}

</script>
</body>
</html>
