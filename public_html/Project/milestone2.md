<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Shop Project</td></tr>
<tr><td> <em>Student: </em> Harsh Mistry (hm485)</td></tr>
<tr><td> <em>Generated: </em> 4/23/2023 10:50:00 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone-2-shop-project/grade/hm485" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Users with admin or shop owner will be able to add products </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of admin create item page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233800644-88b25e7d-b1a4-4145-822a-f67206ebc7a8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of admin create item page with valid data filled in<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233800687-50b45f1c-7070-4031-b176-9665eb304b8d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of success message showing up after creating product<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of populated Products table clearly showing the columns</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233800852-da02cb32-0418-488e-82f3-cc2cd85afad1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Products table populated, showing all columns (and newly added item Bag)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly describe the code flow for creating a Product</td></tr>
<tr><td> <em>Response:</em> <div>A form that accepts input for the name, description, category, stock, unit pricing,<br>and visibility may be found on the add_item.php page. Simple validation takes place<br>on the browser side to the attributes that are assigned to these form<br>components. For instance, the unit price must be a number between 0.01 and<br>5000.00 and can only be increased by a step of 0.01. The name<br>must be present. The stock must be a number between 0 and 1000.<br>You can add goods even if they are out of stock. Because visibility<br>can simply be checked or unchecked and description and category are given default<br>values, there is no need to validate them on the browser side. The<br>statement is then executed on the database after the parameters are bound to<br>it. If everything goes according to plan, a success message flashes, but an<br>error causes an error message.</div><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Harshm43/IT202-008/pull/41">https://github.com/Harshm43/IT202-008/pull/41</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://hm485-prod.herokuapp.com/Project/add_item.php">https://hm485-prod.herokuapp.com/Project/add_item.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Any user can see visible products on the Shop Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Shop page showing 10 items without filters/sorting applied</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233801678-5f013860-621c-4b8e-bb77-b69bcea1e747.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shop page showing 10 items without filters/sorting applied for Admin<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233801770-7f40adc8-8139-41c9-8188-28e988ae0484.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shop page showing 10 items without filters/sorting applied for a logged in User<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233802217-6787789f-1ed0-4cee-a956-3cf9922b1c95.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shop page showing 10 items without filters/sorting applied for a non-logged in user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Shop page showing both filters and a different sorting applied (should be more than 1 sample product)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233803099-30133524-6c40-4305-bb49-db41bec5e7a8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shop page showing Sports category filter applied and low-high price sort applied<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the filter/sort logic from the code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233803201-5ad5a728-f2d9-4136-b200-17c9364ef213.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the filter/sort logic from code (adds to query based on whether<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how the results are shown and how the filters are applied</td></tr>
<tr><td> <em>Response:</em> <div>A form on the home page allows users to specify whether and which<br>particular filter or sort should be used. The user can choose from price<br>sorts, a category dropdown menu, and a search input form. The page is<br>refreshed after clicking the search button, and form input is delivered through the<br>post method. To ensure that the default value is still chosen in the<br>form even if no post data is given to the form, the PHP<br>page first sets default values for filter and sort values. PHP tags that<br>check the value of the cached variables (or get the default values as<br>discussed previously) are used to persist the user's filtering and sorting requests. Additionally,<br>PHP tags are utilized to create conditional HTML that chooses whether to display<br>the edit or add to cart buttons.</div><div><br></div><div><br></div><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Harshm43/IT202-008/pull/45">https://github.com/Harshm43/IT202-008/pull/45</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://hm485-prod.herokuapp.com/Project/home.php">https://hm485-prod.herokuapp.com/Project/home.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Show Admin/Shop Owner Product List (this is not the Shop page and should show visibility status) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of the Admin List page/results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233803568-7fbea9a4-bf8d-4a07-b866-511d898a7af2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Admin List page showing all products (both visible and non-visible and labeled)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the results are shown</td></tr>
<tr><td> <em>Response:</em> <div>Since this is a protected page, PHP authenticates the user to determine if<br>they are an Admin or Shopowner, sending them back to the home page<br>and flashing a message otherwise. This page has a form where filters can<br>be applied, much like the regular store list page does. The post method<br>is used to send the values entered in the form's fields. When the<br>page is reloaded, variables for each filter and sort are given default values.<br>This value is overridden if the key for a specific filter or sort<br>is set (this is needed later to ensure that the admin's or shop<br>owner's filters/sorts persist). A variable is given the beginning of a SQL select<br>statement. This SQL statement uses the products table to obtain the name, unit_price,<br>and visibility. A WHERE clause with conditions and an ORDER BY clause with<br>conditions are then added to apply the relevant filters and sorts. Visibility being<br>true is a condition on the shop list page, but it is not<br>on this page. To limit the number of results to 10 and order<br>them by most recently modified, the query string is then added. The statement<br>is then performed against the database with the query parameters bound, and the<br>results are cached to a variable.&nbsp;</div><div><br></div><div><br></div><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Harshm43/IT202-008/pull/45">https://github.com/Harshm43/IT202-008/pull/45</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://hm485-prod.herokuapp.com/Project/list_items.php">https://hm485-prod.herokuapp.com/Project/list_items.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Admin/Shop Owner Edit button </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the edit button visible to the Admin on the Shop page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233803780-0a395403-5b07-4fad-9119-5c962d1c7968.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing edit button visible to Admin on the Shop page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the edit button visible to the Admin on the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233803882-3cee8bde-febe-471f-9de6-31c6af8497d6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing edit button visible to Admin on the Product Details Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing the edit button visible to the Admin on the Admin Product List Page (The admin page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233803927-5177f6c1-c5df-4b65-9747-779a5f7998a9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing edit button visible to Admin on the Admin Product List page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a before and after screenshot of Editing a Product via the Admin Edit Product Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233803993-3ee2bec1-e3ce-4335-8a42-9055ad8a0ece.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before, these were T-shirts for $10.00 there was only 25 in stock, and<br>there is a description.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233804056-94eb96b4-a98a-4246-afe1-63d4cb711331.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After, these were Shirt for $20.00, there are 2 in stock, and there<br>is no description.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <div>PHP uses conditional HTML to decide whether or not to display the edit<br>button on each page where the product is listed. It is viewable if<br>the administrator or store owner accesses the page. If not, it isn't. By<br>including the product name as a query parameter, the edit button takes the<br>admin or shop owner to the edit product page. In order to allow<br>an administrator to return to the edit product page for a particular product,<br>query parameters and the get method were employed. If a user is not<br>an admin or shop owner, they are taken to the shop list page<br>and a message stating that they lack access flashes on the edit product<br>page.</div><div><br></div><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Harshm43/IT202-008/pull/45">https://github.com/Harshm43/IT202-008/pull/45</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://hm485-prod.herokuapp.com/Project/more_details.php?name=Shirt">https://hm485-prod.herokuapp.com/Project/more_details.php?name=Shirt</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Product Details Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the button (clickable item) that directs the user to the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233804337-0c461f43-6fb1-4d77-897f-7c71ea47a136.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the clickable item (the name of the product) which redirects to the<br>Product Details Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the result of the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233804371-952ccc50-e90e-488c-89f0-b9442ad51522.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Result of Product Details Page for clicking on Pencil<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <div>The name of the product is actually a link to the page with<br>more details, with the name of the product as a query string parameter<br>(this URL is constructed using PHP tags), on each page the product is<br>displayed.The user gets taken to the page after clicking the link.&nbsp; Without a<br>query string argument, the user is redirected and informed that they must first<br>choose a product to view this page.</div><div>However, the $_GET magic variable's value is<br>obtained and cached if it is set. The parameter is bound, the statement<br>is run against the database, and the outcome is cached into a variable<br>by using this name in the query's where clause. PHP tags are used<br>on the page to insert data about the product into HTML components. Additionally,<br>conditional HTML is used to control whether the edit or add to cart<br>buttons are displayed, depending on whether the user is logged in or not.</div><div><br></div><div><br></div><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Harshm43/IT202-008/pull/45">https://github.com/Harshm43/IT202-008/pull/45</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file (can be any specific item)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://hm485-prod.herokuapp.com/Project/more_details.php?name=chair">https://hm485-prod.herokuapp.com/Project/more_details.php?name=chair</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Add to Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the success message of adding to cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233842685-6b64b65e-7bda-4926-94fa-fab45ab0965f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Success message of adding shirt to the cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the error message of adding to cart (i.e., when not logged in)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233842738-41d0ee1d-028e-4748-8343-e11b89df5036.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>In compliance with the proposal requirement &quot;User must be logged in for any<br>Cart related activity&quot;, I simply did not allow the add to cart button<br>show up if the user wasn&#39;t logged in rather than flashing a message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Cart table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233843687-dc1556f5-3228-463e-90ec-8bcb0830b990.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Cart table with data in it<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Tell how your cart works (1 cart per user; multiple carts per user)</td></tr>
<tr><td> <em>Response:</em> <div>One cart per user is how my cart functions. Along with the id<br>(which is automatically incremented and serves as the primary key), the product_id and<br>user_id combine to create a unique composite key that identifies each entry. A<br>foreign key called product_id refers to the primary key id from the Products<br>table, while a foreign key called user_id refers to the primary key id<br>from the Users table. The desired_quantity and unit_price are also kept for each<br>item the user wants. The last two columns are modified and created, set<br>when the record is first created and modified, respectively.</div><div><br></div><div><br></div><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Explain the process of add to cart</td></tr>
<tr><td> <em>Response:</em> <div>A form is submitted to the cart.php page with the name of the<br>item being sent via the post method (this is saved in a hidden<br>field) whenever the user hits add to cart on the shop list page,<br>admin see all items page, or the more details page. If the post<br>magic variable has a value set for the name key on the cart.php<br>page, we utilize a SQL select statement to retrieve the product's id and<br>price by using the name in the WHERE clause. The name parameter is<br>attached to the statement, the database query is run, and the outcome is<br>cached in a variable. The product_id and unit_price are then taken from the<br>select statement we just performed (we cached the result), and the user_id is<br>taken from the helper function we created previously. The preparation of a SQL<br>insert query follows this.The arguments are then bound, the database query is run,<br>and a success message is displayed. A flash message is displayed if the<br>item has already been added to the cart or if an unidentified error<br>has occurred. After that, the most recent data for the cart.php page is<br>produced using a brand-new select statement.</div><div><br></div><div><br></div><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Harshm43/IT202-008/pull/47">https://github.com/Harshm43/IT202-008/pull/47</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User will be able to see their Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Cart View</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233844064-bd8e671c-9473-41c0-a6f1-00959a096aa3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Cart View showing subtotal, cart total, product details page (this can<br>be accessed by clicking the name of the product), and few different items<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain how the cart is being shown from a code perspective along with the subtotal and total calculations</td></tr>
<tr><td> <em>Response:</em> <div>With the help of a helper function we previously created, we obtain the<br>user's id on the cart.php page. The user's ID is then placed in<br>the WHERE clause of a SQL select query to retrieve all the cart<br>information for this user. We choose the product_id column from the Cart table,<br>the name column from the Product table, the unit_price column from the Product<br>table, and the desired_quantity column from the Products table from the Cart table<br>that is left linked with it. The query is run against the database<br>after being bound to the user id, and the results are cached. The<br>items from the cart are shown in a table using a PHP foreach<br>loop. On the server, the desired amount is multiplied by the unit price<br>to create the subtotal column, and this result is then passed to the<br>HTML components. Prior to the foreach loop beginning, a total variable is also<br>initialized with the value 0, and on each iteration, the subtotal is added<br>so that it may be seen once the loop has finished.</div><div>Of course, each<br>product name actually serves as a link to a page with further information.</div><div><br></div><div><br></div><div><br></div><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Harshm43/IT202-008/pull/47">https://github.com/Harshm43/IT202-008/pull/47</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://hm485-prod.herokuapp.com/Project/cart.php">https://hm485-prod.herokuapp.com/Project/cart.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> User can update cart quantity </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show a before and after screenshot of Cart Quantity update</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233844367-7319fb42-b124-4db0-b9b5-593a7f1874ec.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before, we only have 6 chair in our cart<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233844415-e3b0064c-8a9c-4959-a21d-f12c161c7d40.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After, we have 10 chairs in our cart and a success message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show a before and after screenshot of setting Cart Quantity to 0</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233844367-7319fb42-b124-4db0-b9b5-593a7f1874ec.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before, we only have 6 chair in our cart<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233844590-996304db-e9bc-4aa4-922d-964b3141da41.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Now, we changed the quantity to 0 BUT we did not update<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233844632-737e43d0-be1d-41ba-9373-3a9670c502dd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After, we updated, thereby removing the item from our cart and showing a<br>success flash message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Show how a negative quantity is handled</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233844731-14ae2de4-4db9-43ae-810c-e75d29146df5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Browser doesn&#39;t allow less than 0 as a valid quantity (there is also<br>client-side JavaScript and server-side PHP validation that doesn&#39;t get triggered)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain the update process including how a value of 0 and negatives are handled</td></tr>
<tr><td> <em>Response:</em> <div>A form that is submitted using the post method consists of the amount<br>input field, the update button, and a hidden input element with the product<br>id. By specifying a min property for the quantity, the values of the<br>forms are automatically checked on the browser side. Additionally, the form is checked<br>on the client side using the onsubmit property using a straightforward conditional to<br>make sure the quantity is not less than 0, flashing a message and<br>disabling submission if it is. If the quantity and id keys are set,<br>these values are cached in variables to make them easier to write when<br>the page is reloaded. In addition, the helper function we developed before is<br>used to retrieve the user id.&nbsp; The quantity is checked one last time<br>on the server to make sure it is greater than zero. If it<br>is, a warning message appears. Otherwise, a query is created using the user's<br>id and the product's id in the where clause to update the desired_quantity<br>value in the Cart table if the quantity is larger than 0. The<br>user id and product id are used in the where clause of the<br>query to build a SQL delete statement to remove the entry if the<br>amount is equal to 0. It is then executed on the database after<br>the parameters have been bound. The cart page receives updated data since the<br>select statement comes after the portion that updates the quantity.</div><div><br></div><div><br></div><div><br></div><div><br></div><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Harshm43/IT202-008/pull/47">https://github.com/Harshm43/IT202-008/pull/47</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Cart Item Removal </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a before and after screenshot of deleting a single item from the Cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233845034-ac1555a6-0208-443e-91ec-5eacfa4d3a88.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>before removing the item <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233844960-84dedc71-ff6c-443a-8241-482aea19ae09.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>after removing the item <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a before and after screenshot of clearing the cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233845096-0aeb946d-0093-49f4-bda4-53c8d63ca81d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before clearing cart<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233845116-c2604e71-c8f1-483b-8ceb-2a994a60d451.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>after cleating the cart <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how each delete process works</td></tr>
<tr><td> <em>Response:</em> <div>When the cart is displayed, a form with a hidden element bearing the<br>name "remove-id" and a visible submit button bearing the word "Delete" is added<br>for single item deletion. The values are sent to the page using the<br>post method after the form has been submitted. An SQL deletion query is<br>created to remove the item from the cart if the remove-id key is<br>set in the post magic variable.</div><div>The user id and product id are utilized<br>in the where clause to specify what should be deleted because they are<br>both distinct composite keys. The user id can be retrieved using the helper<br>function we created before, and we have the product's id from the hidden<br>field.We then conduct the query against the database, flashing a success message if<br>it succeeds and an error message if it fails (exception), after binding these<br>values to the query parameters. There is a form with a hidden input<br>element named "remove-all" at the bottom of the cart that may be used<br>to delete every item from it. The page is refreshed after the form<br>is submitted. A delete statement is produced if the "remove-all" key is set<br>in the post magic variable, passing the user id (which we acquired using<br>the helper function) in the where clause. The query is then run against<br>the database after binding the argument value. Both of these processes take place<br>PRIOR to the select statement being performed to ensure that the most recent<br>and accurate.</div><div><br></div><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Harshm43/IT202-008/pull/47">https://github.com/Harshm43/IT202-008/pull/47</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 10: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/233846281-7a62752c-4494-4eca-b336-98e566d5fbeb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing all the closed issues of milestone2 <br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone-2-shop-project/grade/hm485" target="_blank">Grading</a></td></tr></table>