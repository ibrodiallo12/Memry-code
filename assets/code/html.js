$(function(){
	//The separator in the ARRAY
	var s = ",";
	//
	var c = "";
	var k = "";
	// N 1	
	c = "<title>This is a title</title>";
	k = "Title of the page in HTML";
	// N 2
	c = c + s + "<img src=\"image.jpg\" />";
	k = k + s + "Print an Image .jpg in a page";
	// N 3
	c = c + s + "<!DOCTYPE html>\n\t<head>\n\t\t<meta charset=\"utf-8\" />\n\t\t<title>Title</title>\n\t</head>\n\t<body>\n\t</body>\n</html>";
	k = k + s + "Structuring basic html tag";
	// N 4
	c = c + s + "<p>Hello and welcome to my site!<br />This is my first test so please make allowances;<br />I'm gradually learning how it works.</p>";
	k = k + s + "Paragraph with a Line Break";
	// N 5
	c = c + s + "<meta charset=\"utf-8\" />";
	k = k + s + "Specify the character encoding for the HTML document";
	// N 6
	c = c + s + "<h1>This is heading 1</h1>\n<h2>This is heading 2</h2>\n<h3>This is heading 3</h3>\n<h4>This is heading 4</h4>\n<h5>This is heading 5</h5>\n<h6>This is heading 6</h6>";
	k = k + s + "The six different HTML headings";
	// N 7
	c = c + s + "<em>Emphazing text</em>";
	k = k + s + "Format text in a document";
	// N 8
	c = c + s + "<p>Hello and welcome to my website!<br />This is my first test so please <em>make allowances</em>I'm gradually learning how it works.</p>";
	k = k + s + "Paragraph with emphazing and Line Brand";
	// N 9
	c = c + s + "<p>This is my first test so please <strong>make allowances</strong> I'm gradually learning how it works.</p>";
	k = k + s + "Pharagraph with a strongly emphazing";
	// N 10
	c = c + s + "<strong>Strongly emphazing</strong>";
	k = k + s + "Strongly emphazing in HTML";
	// N 11
	c = c + s + "<body>\n\t<h1>Very important title</h1>\n\t<h2>Important title</h2>\n\t<h3>Somewhat less important title (sub-title)</h3>\n\t<h4>Not very important title</h4>\n\t<h5>Not important title</h5>\n\t<h6>Title that is really not important at all</h6>\n</body>";
	k = k + s + "The six different HTML headings in body";
	
	c = c + s + "";
	k = k + s + "";
	
	c = c + s + "";
	k = k + s + "";
	
	//PRINT IN THE 
	$("#lang").text(c);
	$("#know").text(k);
	$("#separator").text(s);
});
