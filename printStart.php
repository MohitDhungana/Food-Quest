<html>
<head>
    <style>


body { font-size: 50px; }

.stars-container {
  position: relative;
  display: inline-block;
  color: transparent;
}

.stars-container:before {
  position: absolute;
  top: 0;
  left: 0;
  /*content: '★★★★★';*/
  content:'*****';
  color: lightgray;
}

.stars-container:after {
  position: absolute;
  top: 0;
  left: 0;
  /*content: '★★★★★';*/
  content:'*****';
  color: gold;
  overflow: hidden;
}

.stars-0:after { width: 0%; }
.stars-10:after { width: 10%; }
.stars-20:after { width: 20%; }
.stars-30:after { width: 30%; }
.stars-40:after { width: 40%; }
.stars-50:after { width: 50%; }
.stars-60:after { width: 60%; }
.stars-70:after { width: 70%; }
.stars-80:after { width: 80%; }
.stars-90:after { width: 90%; }
.stars-100:after { width: 100; }
</style>
</head>

<body> 
    