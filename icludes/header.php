	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>2 Column Layout — Right Menu with Header &amp; Footer</title>
		<style type="text/css">
		
			body {
				margin:0;
				padding:0;
				font-family: Sans-Serif;
				line-height: 1.6em;
			}
			
			header {
				background: #ccc;
				height: 100px;
			}
			
			header h1 {
				margin: 0;
				padding-top: 1px;
			}
			
			main {
				padding-bottom: 10010px;
				margin-bottom: -10000px;
				float: left;
				width: 100%;
			}
			
			nav {
				padding-bottom: 10010px;
				margin-bottom: -10000px;
				float: left;
				width: 230px;
				margin-left: -230px;
				background: #eee;
			}
			
			footer {
				clear: left;
				width: 100%;
				background: #ccc;
				text-align: center;
				padding: 4px 0;
			}
	
			#wrapper {
				overflow: hidden;
			}
						
			#content {
				margin-right: 230px; /* Same as 'nav' width */
			}
			
			.innertube {
				margin: 1px; /* Padding for content */
				margin-top: 0;
			}
		
			p {
				color: #555;
			}
	
			nav ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
			}
			
			nav ul a {
				color: black;
				text-decoration: none;
				text-transform:uppercase;
			}
* {box-sizing: border-box;}
 
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
 
.topnav {
  overflow: hidden;
  background-color: brown;
}
 
.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 25px 16px;
  text-decoration: none;
  font-size: 25px;
}
 
.topnav a:hover {
  background-color: white;
  color: black;
}
 
.topnav a.active {
  background-color: white;
  color: black;
}
 
.topnav .search-container {
  float: right;
}
 
.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}
 
.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}
 
.topnav .search-container button:hover {
  background: #ccc;
}
 
@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
		
		</style>
		
</head>
	
<body>		
 
	<header>
		<div class="topnav">
  <a class="active" href="#home">Trang chủ</a>
  <a href="#about">Về chúng tôi</a>
  <a href="#contact">Liên hệ</a>
  <a href="#contact">Liên hệ</a>
   <img src="images/1.png" alt="" class="cangiua" style="width:383px;height:100x;">
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Tìm kiếm.." name="search">
      <button type="submit">Search</button>
    </form>
  </div>
</div>
          
			</h1>
		</div>
	</header>
		
	<div id="wrapper">
	
		<main>
			<div id="content">