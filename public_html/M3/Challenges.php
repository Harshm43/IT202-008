<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Problem 1</title>
    <meta charset="utf-8" />
    <script>
        window.addEventListener("load", () => {
            console.log("loaded via javascript");
            //TODO: add any extra onload processing you may need here
        });
        function getCurrentSelection() {
            setTimeout(() => {
                //added this delay here as some solutions may require it to update properly (i.e., click code may complete before the navigation changes)
                //TODO: add code for processing the current selection 
              var clickedLink = event.target;
              var currentClickedlinktext = link.innerText;
              //Note: likely you'll want to call updateCurrentPage towards the end
              updateCurrentPage(currentClickedlinktext);
            }, 100);
          function handleClick(event) {
            event.preventDefault();
            const link = event.target;
            getCurrentSelection(link);
}

        }
      
    </script>
    <style>
        /* TODO: make edits here */
        /* Make navigation horizontal */
  nav {
    display: flex;
    justify-content: center;
  }
  nav ul {
    display: flex;
    list-style: none;
  }
  nav li {
    margin: 0 1rem;
  }
  
  /* Remove navigation list item markers */
  nav li:before {
    content: none;
  }

  /* Give navigation a background */
  nav {
    background-color: lightblue;
  }

  /* Change link color on mouseover */
  nav a:hover {
    color: red;
  }

  /* Change list bullet points to checkmarks */
  ul li::before {
    content: '✓';
    margin-right: 0.5rem;
  }

  /* Uppercase first character of h1 and a tags */
  h1, a {
    text-transform: capitalize;
  }
  
  /* Add custom styling */
  body {
    background-color: #f5f5f5;
    font-family: cursive;
    color: #333;
  }
  
  ul {
    margin-left: 1.5rem;
    margin-bottom: 1.5rem;
  }
  
  li {
    margin-bottom: 0.5rem;
  }
    </style>
    <!-- make the necessary edits above this line -->


    <!-- Do not edit anything below this line, doing so will lose points-->
    <script src="https://it202-spring-22.herokuapp.com/M3/problem1.js">
            //Don't edit anything in this tag and do not delete it
    </script>
</head>
<!-- Do not edit anything below this line, doing so will lose points-->

<body onload="check();updateCurrentPage('start');">
    <header>
        <h2>Problem 1</h2>
    </header>
    <nav>
        <ul>
          <li><a href="#login" onclick="handleClick(event)">login</a> </li>
          <li><a href="#register" onclick="handleClick(event)">register</a></li>
          <li><a href="#profile" onclick="handleClick(event)">profile</a></li>
          <li><a href="#logout" onclick="handleClick(event)">logout</a></li>
        </ul>
    </nav>
    <h1></h1>
    <h3>Challenges</h3>
    <ul>
        <li>Edit the given <code>&lt;style&gt;</code> tag to customize the appearance of this page
            <ul>
              <li>(1 pt) Make the navigation horizontal</li> 
              <li>(1 pt) Get rid of the navigation list item markers</li> 
              <li>(1 pt) Give the navigation a background</li>
              <li>(1 pt) Make the links (or their surrounding area) change color on mouseover</li>
              <li>(1 pt) Change the "bullet points" of this entire list to checkmarks (✓)</li>
              <li>(1 pt) Use CSS to uppercase the first character of the content in the <code>&lt;h1&gt;</code> tag and the  <code>&lt;a&gt;</code> tags </li>
              <li>(1 pt) Add some styling of your choice (that doesn't conflict with any requests in this assignment), this will be mentioned in the submission</li> 
            </ul>
        </li>
        <li>(1 pt) Any style applied to unordered list in the <code>&lt;nav&gt;</code> tag should not apply to this list
            (i.e., nav
            and this
            list should
            not appear identical)</li>
        <li>
            Any time a navigation link is clicked have it do the following:
            <ul>
                <li>(1 pt) Update the content of the <code>&lt;h1&gt;</code> tag with the link text</li>
                <li>(1 pt) Update the content of the <code>&lt;title&gt;</code> tag with the link text</li>
                <li>Hint: Get the word of the current navigation and pass it to updateCurrentPage()</li>
            </ul>
        </li>
    </ul>
    <footer></footer>
</body>

</html>