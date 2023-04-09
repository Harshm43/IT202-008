<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Harsh Mistry (hm485)</td></tr>
<tr><td> <em>Generated: </em> 4/9/2023 12:41:25 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone1-deliverable/grade/hm485" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><ol><li>NOTE: You may want to try to capture as much checklist evidence in your screenshots as possible, you do not need individual screenshots and are recommended to combine things when possible. Also, some screenshots may be reused if applicable.</li></ol><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230743638-670e09f9-2ae9-47a7-a8fb-60044f485297.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show invalid email validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230743712-d1160762-f15f-4133-9aee-66c7181867ee.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show invalid password validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230743748-8217920c-afa0-4b0b-9e00-8cf33bc1555f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show passwords not match validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230743791-b387362b-c240-40de-b37f-407d0aa04720.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show email not available validation (already registered)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230743844-d20eecb6-a169-4411-9940-dde6d96ff8ca.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show username not available validation (username is taken)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230744029-36814246-a5a9-43a9-a454-5b990fd6125f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show the form with valid data filled in before the form is submitted<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230722965-fbd54091-cd12-42b4-bbf5-78001407f34d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the record of the added user in the DB<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Harshm43/IT202-008/pull/15">https://github.com/Harshm43/IT202-008/pull/15</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>This user input will ask users to fill out any necessary data, including<br>name, email address, login, and password. The user input will then be checked<br>for accuracy, completeness, and proper format as part of the validation process. This<br>entails screening for mistakes like incorrect email addresses or passwords that don&#39;t satisfy<br>the necessary complexity requirements. When the user is finished, they normally submit the<br>form by clicking a button or hitting the enter key. The website&#39;s server<br>may execute the form after that, at which point it will make a<br>new user account and save the user&#39;s data in a database.&nbsp;Before submitting the<br>form, the frontend validation will check the information in the user&#39;s web browser.<br>Before transmitting data to the server, the front end validation checks to make<br>sure it is accurate and complete. After the form has been submitted, the<br>server performs backend validation. Backend validation is carried out to make sure the<br>data is safe and complies with server and database requirements.The user is prompted<br>to set up a password during registration. This often entails typing a password<br>into a form field, then typing it again to verify it. The website<br>may enforce password complexity criteria such as a minimum length, a combination of<br>uppercase and lowercase letters, digits, and special characters in order to ensure that<br>the user creates a strong password. After the user creates a password, it<br>should be encrypted using a technique called hashing, which turns the password into<br>an unreadable format. A salt, or random string of characters, is added to<br>the password before it is hashed in order to further strengthen security.The user<br>record is kept in the database so that it can be quickly retrieved<br>in the future. An exclusive id is given to each user record.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230744349-354121c1-d806-48ad-bc82-bd3919a13324.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>password dose not match<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230744436-67126aae-2d7c-4aab-9d2d-072e80f05bb7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show validation based on non-existing user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230744502-9b5d80e0-f7e3-4fb3-a2d4-19b2cb0f5406.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows login is successful <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Harshm43/IT202-008/pull/21">https://github.com/Harshm43/IT202-008/pull/21</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The user must provide their username and password or email address in the<br>login box. You must enter your login or email. Before continuing, the email<br>or login is verified upon submission to make sure it is valid. The<br>encrypted password is compared to the user&#39;s password that is kept in the<br>database. The password entered is invalid if the password does not match. The<br>encrypted password is compared to the user&#39;s password that is kept in the<br>database. The password entered is invalid if the password does not match. The<br>user record may be simply retrieved from the database in order to check<br>the user&#39;s password and determine their job.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230744727-bbad9c0d-aab4-4652-8e67-e9600fa74cfc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows successfully logged out <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230745129-5d49001d-dcc6-4546-bb19-e788e439b60b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this shows users need to login to access <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Harshm43/IT202-008/pull/21">https://github.com/Harshm43/IT202-008/pull/21</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>When a user logs in, the server confirms their identity by comparing their<br>credentials to one or more databases or other authentication mechanisms. The user typically<br>submits their credentials (often a username and password) into a login form. The<br>server creates a session for the user if the user&#39;s credentials are legitimate.<br>This usually entails creating a special session ID and linking it to the<br>user&#39;s browser with the use of a cookie or URL parameter. With a<br>server-side data store, the server keeps track of the user&#39;s session information, such<br>as their user ID or other session data (such as a database or<br>memory cache). Throughout the user&#39;s interaction with the web application, the server keeps<br>track of the user&#39;s authenticated state using the session ID.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230745129-5d49001d-dcc6-4546-bb19-e788e439b60b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> shows not being logged in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230745520-903fa47e-79fb-4604-b85a-a1d4c4311221.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows that the user doesn&#39;t have permission <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230745560-4be7832c-95a7-4551-8f7a-6f9c56fa67e5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Roles table with valid data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230745737-c587fd4f-6058-4b17-ac6b-144a97b37bd4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>UserRoles table with valid data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Harshm43/IT202-008/pull/21">https://github.com/Harshm43/IT202-008/pull/21</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Harshm43/IT202-008/pull/22">https://github.com/Harshm43/IT202-008/pull/22</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>You can tell if someone is logged in or not by looking at<br>their user session. If a user has not been configured for the session,<br>then the user is not logged in and cannot perform any login-required operations.<br>In order to begin the login process without being forwarded to a login<br>page, the user must normally have a valid user session. Because access to<br>any protected resources or actions depends on the program being able to confirm<br>the user&#39;s identity, this is necessary.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>A user session is used to determine whether a user has been granted<br>a role in the database. If no user roles are specified for the<br>session, the user won&#39;t see the role page on the website. To determine<br>a user&#39;s roles and permissions within a web application, user sessions are frequently<br>utilized. A user will normally not be able to view pages or carry<br>out actions that need those roles if they do not have any roles<br>set in their session.<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230771196-ccc16bc6-b5d1-45b0-8cd7-dbe35bc26f24.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the navigation is styled and its in blue and words in sky blue.<br><br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230771349-e9fe5ce9-d3d8-4735-8b51-a09bb1951041.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the form is styled with with the text being green<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230771599-b13d6e13-e3c4-47d2-976a-420836aca615.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the UI is purple color and easier to look .<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230771708-f9592a2d-6f3b-4796-b049-dfa62d00a462.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Data output is in a clean manner<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Harshm43/IT202-008/pull/21">https://github.com/Harshm43/IT202-008/pull/21</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Harshm43/IT202-008/pull/22">https://github.com/Harshm43/IT202-008/pull/22</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>The color is set via CSS. To give items a particular look, class<br>attributes are employed. The sky blue lettering and blue navigation backdrop are both<br>selected. The background is a pale shade of purple. The form&#39;s input fields<br>are created with a border and rounded corners.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230772144-d1a60844-199f-4591-ac51-0a534e7e0848.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this show you need to fill out he info to procced<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230772235-36de3e5b-c048-41ba-9980-70c049a50da2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this shows password need to be 8 character <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230785213-3fa3a9de-6cce-4d1c-befe-7e8e55b56abe.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this show invalid username error message <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230772328-c00b0646-ee59-4a10-a7bc-03dccf96f19a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this shows email not found error message <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Harshm43/IT202-008/pull/19">https://github.com/Harshm43/IT202-008/pull/19</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>Every message is highlighted in a color that corresponds to the type of<br>error. Before being transmitted to the front end, the messages are formatted in<br>a user-friendly way in the back end. The user may readily grasp the<br>messages because they are brief and clear.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230774435-965a0759-69e0-4d61-bc1d-ce68098d5197.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this shows the user profile where it shows username, email and also you<br>change password <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Harshm43/IT202-008/pull/20">https://github.com/Harshm43/IT202-008/pull/20</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>The user&#39;s profile is obtained by verifying the user ID recorded in the<br>session to the user&#39;s database record. The data is prefilled into the form<br>if the DB contains a matching user id. The form is sent back<br>to the web page template, where the login and email are filled in<br>and displayed.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230774675-0c36535d-69fb-4587-baf1-6ddc46b790c5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this shows that username must be 3 to 16 character or number <br><br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230774749-1df7f6a5-a441-46a9-9125-9231f69adabe.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this shows that the email address needs a @ <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230774942-3d071483-88c5-4e56-bb21-a58455f7f32a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this shows the password is too short <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230775009-e23c6d13-47b0-4522-887e-c45200697d00.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows that password must match <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230775394-82e9606c-da13-4afd-b659-850b66f82d4f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this shows that username is not available <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230775626-4fa0e48c-584c-4dd2-bfae-b08cb12a1169.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before Users table when a user edits their profile<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230775667-48c6da80-16c8-4301-9c04-86ea47b75acd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After Users table when a user edits their profile<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Harshm43/IT202-008/pull/21">https://github.com/Harshm43/IT202-008/pull/21</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>The user can change their username and email, but changing their password is<br>not required. The current password, the new password, and the new password&#39;s confirmation<br>must all be entered for the password update. The username is validated upon<br>submission to make sure it meets the minimum length requirements and is unique.<br>The email address is also verified as being legitimate and having never been<br>used before. Before changing the password, it is verified that the current password<br>is still appropriate for the current user. If the current password is still<br>valid, the new password and confirm new password are both checked to make<br>sure they are the right length and match the current password.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Issues and Project Board </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230777488-f460a5d9-ff02-4606-b0a2-7bee5d020586.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>first feature <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230777523-267eb897-e836-4266-9142-1400a32a73e6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>second feature <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230777569-02ca0251-e700-4564-9cc2-8986dbfb875a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>third feature <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230777609-53473c9c-f782-463d-98cb-8f96be336a79.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>fourth feature <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230777624-048e32ba-5363-422e-8054-bec39b07ee8d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>fifth feature <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230777667-c39ab7fc-494b-4278-a904-c2a49c4a39b1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>sixth feature <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230777719-c0d12a04-9215-407e-afe5-947a49695534.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>seventh feature <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230777738-7d45efd2-8f9d-4219-a3d0-ff51ed021885.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>eight feature <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230777766-9f1158ad-509d-4f67-95a8-47fdea2ac487.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>ninth feature <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123105167/230777822-4e480227-9518-4bf8-839b-3182fd766348.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the Project Board perspective<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Include a direct link to your Project Board</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/users/Harshm43/projects/1/views/1">https://github.com/users/Harshm43/projects/1/views/1</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Prod Application Link to Login Page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://hm485-prod.herokuapp.com/Project/login.php ">https://hm485-prod.herokuapp.com/Project/login.php </a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone1-deliverable/grade/hm485" target="_blank">Grading</a></td></tr></table>