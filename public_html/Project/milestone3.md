<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 Shop Project</td></tr>
<tr><td> <em>Student: </em> Harsh Mistry (hm485)</td></tr>
<tr><td> <em>Generated: </em> 4/29/2023 4:53:54 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone-3-shop-project/grade/hm485" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone3 branch</li><li>Create a new markdown file called milestone3.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone3.md</li><li>Add/commit/push the changes to Milestone3</li><li>PR Milestone3 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 4</li><li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on GitHub and everywhere else. Images are only accepted from dev or prod, not localhost. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Orders will be able to be recorded </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Orders table with valid data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/235307956-467f1a17-e2d9-4aad-957a-a2ba33b594ed.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>VS Code DB Extension showing Orders table with valid data in it with<br>columns id, user_id, created, total_price, address, payment method, money_received, first_name, and last_name<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of OrderItems table with validate data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/235319571-1f07c36e-a5b1-4508-89c7-79fb251f3b54.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The OrderItems table in the VS Code DB Extension is displayed, and its<br>columns include id, order_id, product_id, quantity, unit_price, created, and changed.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the purchase form UI from Heroku</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/235319643-3f1cfaa8-90fd-48ef-a96b-51d9973d4575.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Cart Items on the Checkout Page (above the form)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/235319728-a6f35474-e3ef-4281-ae10-31a7001d0216.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the purchase form&#39;s checkout page with valid data entered<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot showing the items pending purchase from Heroku</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/235320238-ac162e7c-8613-465e-a017-b32ca867a48c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The item name, unit cost, requested quantity, and subtotal are all displayed in<br>this screenshot of the cart items on the checkout page.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a screenshot showing the Order Process validations from the code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/235320399-feda58ef-52a3-4c74-94e7-99aeb2cdf781.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This involves getting the old price, new price, and stock to utilize as<br>input for the SQL Select Statement&#39;s preparation, binding of parameters, and execution.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/235320505-a1ec4ccd-021e-40d3-9f25-b67dbe0143f4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>If the old price and new price differ when displaying the price, calculations<br>are performed to determine the percent difference. The percentage is then rounded and<br>is included after the actual cost with text indicating whether the price decreased<br>or increased.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/235320556-f160e61a-4a0e-4560-aff4-62197589f36d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The user is routed to the cart page with a message explaining the<br>item name, stock, and how much they wanted so that they can update<br>their cart properly if the requested quantity displayed exceeds the amount in stock.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/235320631-9464a712-e1e5-4494-8d34-0347ef8bbb6b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Initially, client-side validation checks that the purchase form&#39;s fields are not empty, the<br>amount of money received is numeric, and the amount of money received exceeds<br>the cart&#39;s total price.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/235320721-92d3dc56-76c2-4993-87c9-7e51fbf04332.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Second part of client side validation ensuring purchase form fields aren&#39;t empty, money<br>received is numeric, and money received is greater than the total cost of<br>the cart<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/235320721-92d3dc56-76c2-4993-87c9-7e51fbf04332.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>First part of browser side validation ensures that payment information is valid by<br>requiring those fields and using a PHP tag to make the minimum attribute<br>for the money received input field be the cart&#39;s total price<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/235320805-abf3bbb2-88ba-4307-bfe7-3e48264cfe78.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Second part of browser side validation ensures that all necessary shipping information fields<br>are filled out<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/235320853-9f596147-dfcf-4536-8149-21d1104f39b5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>First part of server side validation ensures that payment information isn&#39;t empty, money<br>received is a number, and it is greater than the cart&#39;s total price<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/235320873-548eb15f-cde8-4a93-843b-afe84c200fd3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Second part of server side validation ensures that all necessary shipping information fields<br>are filled out<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a screenshot showing the Order Process validations from the UI (Heroku)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/235321662-02fba017-1ddf-470f-b9e3-ce23280b1475.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A % difference is calculated and given in parentheses next to the displayed<br>actual price if the product&#39;s actual price differs from the price of what<br>is currently in stock.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/235321698-8336ee12-8a45-4ee2-90ff-9d7c44d2b1b8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The user is taken to the Cart Page and informed of the item,<br>how much of it is in stock, and how much they desired if<br>they attempt to check out with more of an item than is available.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/235321801-89b5e93d-7511-41ef-9b53-e1e02fedc9f6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The total of all the items in the cart must be entered as<br>the minimum amount in the money received field to allow form submission (browser<br>side validation); client and server side validation serves as our second and last<br>line of defense.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly describe the code flow/process of the purchase process</td></tr>
<tr><td> <em>Response:</em> <div>1. The user is taken to the checkout page after clicking the "Place<br>Order" button on the cart page.</div><div>2. The user is forwarded to the login<br>page and informed that they must be logged in in order to checkout<br>their cart if they are not already logged in when they visit the<br>checkout page.</div><div>3. The get user id helper function is used to retrieve the<br>user id from the cart, which is used in a SQL Select Statement<br>to retrieve products from the Cart Left Join Products table. This statement chooses<br>the product's unit price, name, stock, required quantity, and product id. It also<br>chooses the cart's unit price.</div><div>4. The SQL statement is connected to the user<br>id parameter.</div><div>5. A query is run against the database and the outcomes.</div><div><div>6. A<br>table comprising the product name, price, quantity, and subtotal (calculated by multiplying price<br>by quantity) is created by iterating through the results array using PHP tags.&nbsp;</div><div>If<br>the product price and cart price differ on each iteration of the pricing<br>portion, the percent difference is computed, rounded, and shown in parentheses next to<br>the unit cost. The user is led to the cart page with a<br>message emphasizing the item, the desired quantity, and the actual stock if the<br>quantity on each iteration of the quantity component is more than what is<br>in stock. This allows the user to update their cart properly.</div><div><div>7. The script<br>tag for the client side validation and the form for collecting payment and<br>shipping information are produced after the cart has finished displaying. The HTML contains<br>browser side validation, and we validate the form using client side validation by<br>using the onsubmit property.</div><div>8. The PHP page then checks to see if the<br>form data was submitted.</div><div>If it was, client side validation takes place and the<br>data is cached. A SQL Insert Statement is created, inserting the user id,<br>total price, address, payment method, money received, first and last names, and more<br>into the Orders, if the data is accurate. After the parameters have been<br>bound, the database query is run.For insertion into the OrderItems table, the most<br>recent insert id is retrieved.</div><div><div>9. An SQL Insert Statement is constructed for each<br>product, the parameters are bound, and the database query is run. In this<br>sentence, the OrderItems table is updated with the order id, product id, and<br>unit price. The SQL Update Statement is constructed for each product, the parameters<br>are bound, and the database query is run. The Products table is changed<br>in this statement's stock to reflect the newly placed order's deductions.</div><div>10. The SQL<br>Delete Statement on the Cart table is then used to delete the user's<br>cart.Once more, the statement is ready, the arguments are bound, and the database<br>query is run. All of the user's cart items are included because the<br>user id appears in the where products are deleted .</div></div></div><div><div>11. The order id<br>is saved in the session, and the user is flashed a success message<br>and forwarded to the order confirmation page.</div></div></div><div><br></div><div><br></div><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Harshm43/IT202-008/pull/65">https://github.com/Harshm43/IT202-008/pull/65</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://hm485-prod.herokuapp.com/Project/checkout.php">https://hm485-prod.herokuapp.com/Project/checkout.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Order Confirmation Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot showing the order details from the purchase form and the related items that were purchased with a thank you message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/235322384-b1537a95-9dad-4677-8a77-b71fc5e1fbe4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before submission, the checkout page showing items in the cart<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/235322447-7ccc73f6-c338-4294-961a-3a602616d640.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before submission, screenshot of payment and shipping information form filled out<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/235322474-e73466eb-2dd3-40ec-b9d2-7f6b8bee1eab.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After submission, screenshot showing order confirmation page; this includes cost of each line<br>item (subtotal), total value, how they purchase and how much they paid (under<br>payment), shipping information (under location), and a personalized thank you message (this includes<br>the full name)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/235307956-467f1a17-e2d9-4aad-957a-a2ba33b594ed.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After submission, screenshot of entire order details in Orders table<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/235322566-de001ac0-c355-4a06-9f1d-c8aa774f5629.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After submission, screenshot of entire order details in OrderItems table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how this information is retrieved and displayed from a code logic perspective</td></tr>
<tr><td> <em>Response:</em> <div>1.The user cannot see the confirmation page if they are not logged in,<br>and a notice to that effect is flashed and they are sent to<br>the login page.</div><div>2. If the order id is cached to a variable and<br>set to the session (stored in the session on the checkout page), it<br>is accessed. It is then removed from the session.&nbsp;</div><div>3. Using the order id<br>from the previous step in the where clause, a SQL Select statement is<br>built to obtain the quantity, price, and product name from OrderItems left join<br>Products.</div><div><div>4. Using the order id in the where clause, a SQL Select statement<br>is created to obtain the payment method, money received, total price, address, first<br>name, and last name from the Orders table.</div><div>5. The parameters are bound, the<br>queries are run, and the results are cached to variables for both statements.</div><div>6.<br>The order items are iterated through to build a table that lists the<br>product name, price, quantity, and subtotal for each of the products from the<br>purchased order using a PHP foreach loop, HTML, and PHP tags.</div><div>7. Using the<br>order details from the orders table, the total price, a thank-you note, payment<br>information, and delivery information are then shown underneath. Similar to the prior phase,<br>combining HTML and PHP</div></div><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Harshm43/IT202-008/pull/65">https://github.com/Harshm43/IT202-008/pull/65</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://hm485-prod.herokuapp.com/Project/confirmation.php">https://hm485-prod.herokuapp.com/Project/confirmation.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User will be able to see their Purchase History </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing purchase history for a user</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/235322710-3218c397-1af8-42c3-a9a7-1f20a8299d23.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> showing purchase history for a user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing full details of a purchase (Order Details Page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/235322807-08d6341e-667b-4cec-b25d-245ac58c8f90.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing full details of a purchase (Order Details Page) without a thank you<br>message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the logic for showing the purchase list and click/displaying the Order Details</td></tr>
<tr><td> <em>Response:</em> <div>1. If a user isn't logged in on the Purchase History page, they<br>are forwarded to the login page and the relevant message is flashed.</div><div>2. A<br>SQL Select statement is created, utilizing the user id (obtained via the get<br>user id helper function) in the where clause, to retrieve the following data<br>from the Orders table: id, money received, payment method, total price, first name,<br>and last name.&nbsp; Results are currently restricted to 10 and are sorted by<br>most recent first.</div><div>3. The arguments are bound, the database query is run, and<br>the output is cached to a variable.</div><div>4. The results are iterated through using<br>a PHP foreach loop, such that for each order, the name, payment details<br>(amount received and method), and total price are displayed.</div><div><div>5. There is a "See<br>Details" button next to each row. It turns out that a form contains<br>this button. The submit button has the order id of the relevant order<br>hidden inside a hidden element. The order details page receives this id when<br>the button is clicked.</div><div>6. If a user isn't logged in on the Order<br>Details page, they are forwarded to the login page and the relevant message<br>is flashed.</div><div>7. The value is cached to a variable if the "order-id" key<br>in the $_POST was set.</div><div>10. Using the order id from the previous step<br>in the where clause, a SQL Select statement is built to obtain the<br>quantity, price, and product name from OrderItems left join Products.</div><div><div>11. Using the order<br>id in the where clause, a SQL Select statement is built to extract<br>the payment method, money received, total price, address, first name, and last name<br>from the Orders table.</div><div>12. The parameters are bound, the queries are run, and<br>the results are cached to variables for both statements.</div><div>13. A table showing the<br>product name, price, quantity, and subtotal for each of the products from the<br>order that was placed is created using an iterative PHP foreach loop, HTML,<br>and PHP tags.</div><div>14. Below that, using the order details from the orders table,<br>the total price, name, payment information, and delivery information are shown. In a<br>similar manner to the prior phase, HTML and PHP.</div></div></div><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Harshm43/IT202-008/pull/65">https://github.com/Harshm43/IT202-008/pull/65</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://hm485-prod.herokuapp.com/Project/order_details.php">https://hm485-prod.herokuapp.com/Project/order_details.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Store Owner Purchase History </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing purchase history from multiple users</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/235323107-0ed147f5-50b1-40bd-91af-d9b272370dd0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing purchase history from multiple users on Store Owner Purchase History Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing full details of a purchase (Order Details Page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/235323140-3fce45f7-26cb-41c6-9951-ccc0be870575.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing full details of a purchase on Order Details Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the logic for showing the purchase list and click/displaying the Order Details (mostly how it differs from the user's purchase history feature)</td></tr>
<tr><td> <em>Response:</em> <div>1. If a user doesn't have admin or shop owner credentials on the<br>shop Owner Purchase History page, they are forwarded to the home page and<br>the relevant message is flashed.</div><div>2. A SQL statement is constructed to retrieve the<br>following information from the Orders table: id, money received, payment method, total price,<br>first and last names. We want to see all orders, not just those<br>made by our user, therefore while the user purchase history has a where<br>clause containing the user id, the where clause in this case is empty.&nbsp;<br>Results are currently restricted to 10 and are sorted by most recent first.</div><div>3.<br>The arguments are bound, the database query is run, and the output is<br>cached to a variable.</div><div><div>4. The results are iterated through using a PHP foreach<br>loop, displaying the name, payment details (amount received and method), and total price<br>for each order.</div><div>5. There is a "See Details" button next to each row.<br>Actually, a form contains this button. The submit button has the order id<br>of the relevant order hidden inside a hidden element. The order details page<br>receives this id when the button is clicked.</div><div>6. If a user isn't logged<br>in on the Order Details page, they are forwarded to the login page<br>and the relevant message is flashed.</div><div>7. The value is cached to a variable<br>if the "order-id" key in the $_POST was set.</div></div><div><div>8. Using the order id<br>from the previous step in the where clause, a SQL Select statement is<br>built to obtain the quantity, price, and product name from OrderItems left join<br>Products.</div><div>9. Using the order id in the where clause, a SQL Select statement<br>is built to get the payment method, money received, total price, address, first<br>name, and last name from the Orders table.</div><div>10. The parameters are bound, the<br>queries are run, and the results are cached to variables for both statements.</div><div>11.<br>A table holding the product name, price, quantity, and subtotal for each of<br>the products from the order that was placed is created using a PHP<br>foreach loop, HTML, and PHP tags.</div><div><div>12. Utilizing the order specifics from the orders<br>database, the total price, name, payment information, and delivery information are then presented.<br>Similar to the previous phase, this is accomplished using HTML and PHP tags.</div></div></div><div><br></div><div><br></div><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Harshm43/IT202-008/pull/65">https://github.com/Harshm43/IT202-008/pull/65</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://hm485-prod.herokuapp.com/Project/see_purchase_history.php">https://hm485-prod.herokuapp.com/Project/see_purchase_history.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Cart page showing the button to place an order</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/235323774-d10a728d-6f14-453f-993b-cee2a678a38a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> cart page showing button to place an order<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone3 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/235323725-6b2c547c-8886-49a8-99b0-3844c096067b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of issues from Milestone 3 (all closed)<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone-3-shop-project/grade/hm485" target="_blank">Grading</a></td></tr></table>