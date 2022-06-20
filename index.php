<?php
session_start();
    include("connection.php");
    include("function.php");
    $user_data = check_login($con); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h1>HI <?php echo $user_data['name']; ?></h1>
    <div class="section-title">
          <h2>Rules and Regulations</h2>
          <div class="row justify-content-space">
            
          <p> 1. INTRODUCTION

<p>The school’s approach towards discipline is for every student to acquire self discipline and be responsible conduct so as to contribute to the overall well-being of all in the school. Every child has the right to expect a conducive teaching and learning environment. Likewise, every student has the responsibility to contribute to that environment.</p>

<p>2. RULES & REGULATION.</p>

<p>2.1 ATTENDANCE AND PUNCTUALITY</p>

<P>2.1.1 Attendance in school is compulsory. Absence from school must be supported by a medical certificate. Excuse from school may be granted on compassionate grounds and on a case-by-case basis. All medical certificates or letters of excuse must be submitted to the Form Teacher immediately when the student returns to school. Absence without valid reason will be deemed as truancy.</P>
<p>2.1.2 Parents need to apply for leave of absence for their child from the Vice-Principal to leave or absent themselves from school for urgent private matters. Permission to leave school early may be granted for special cases. The Form Teacher must be informed by the student and permission must be obtained from the Principal or Vice-Principal. His/Her parent/ guardian will be contacted and his/her name will be entered in the Early Dismissal book in the General Office. Students may leave for overseas travel only during school-announced or official holidays.</p>
<p>2.1.3 Students must be punctual for school, CCA and all school events. Students who are late for school i.e. after morning assembly are subjected to late-coming procedures which include a report slip before they are allowed back to class.</p>

<p>2.2 DAILY ASSEMBLY</p>

<p>2.2.1 Students are expected to be in school by 7.30 a.m. All Form Teachers will then mark attendance.</p>
<P>2.2.2 All students must stand at attention for the flag-raising ceremony. Students who are Singapore citizens must sing the National Anthem and take the Pledge. Students will take the Pledge with the right fist placed over the heart.</P>
<p>2.2.3 All students must sing the School Song with pride and respect.</p>
<p>2.2.4 During morning reflection, students are to listen carefully and to record down learning points in the handbook.</p>



<p>2.3 WEEKLY ASSEMBLY</p>

<p>2.3.1. Classes are to proceed to the School Hall in a quiet and orderly manner and be seated quickly.</p>
<p>2.3.2 A respectful silence and orderliness must be maintained during all assemblies.</p>
<p>2.3.3 Students must not absent themselves and must be punctual.</p>
<p>2.3.4 Class attendance will be taken. Absence without a valid reason will be considered as truancy.</p>
<p>2.4 GENERAL CONDUCT</p>
<p>2.4.1 All students are expected to a caring, persevering and forward-looking person.</p>
<p>2.4.2 All students are to make good use of platforms created for your development.</p>

 

<p>2.5 FACILITIES</p>

<p>2.5.1 Do leave the areas in school in a better condition and state of cleanliness after use.</p>
<p>2.5.2 Take good care of school properties and premises. Cost of replacement for vandalized items will be borne by student(s) responsible for the damage.</p>
<p>2.5.3 Maintain highest standards of cleanliness at all times on the school premises. Cleanliness includes the maintenance of the immediate surrounding areas.</p>
<p>2.5.4 Food and all sweet drinks are to be consumed only in the canteen. All cutleries and trays must be returned to designated receptacles and litter disposed into the rubbish bins.</p>
<p>2.5.5 Mobile phones can only be switched on in the canteen during recess or after school.</p>

 

<p>2.6 CLASSROOM CONDUCT</p>

<p>2.6.1 Work with all your classmates and teachers to achieve optimal outcomes.</p>
<p>2.6.2 All students must be punctual for lessons. Attendance will be taken before the start of each lesson.</p>
<p>2.6.3 Students must not to leave the classroom without permission by teachers.</p>

 

<p>2.7 MAINTAIN A CONDUCIVE ENVIRONMENT FOR TEACHING & LEARNING</p>

<p>2.7.1 Keep the classroom clean and neat at all times.</p>
<p>2.7.2 Consumption of food and sweet drinks are strictly not allowed in the classroom.</p>
<p>2.7.3 Show consideration to others by keeping the noise level low.</p>
<p>2.7.4 Update the class notice boards regularly.</p>
<p>2.7.5 Use of all forms of electronic gadgets is prohibited unless they are required for lessons, e.g. calculators for Maths and Electronic Dictionaries.</p>
<p>2.7.6 Students are not allowed to go to the lockers during the change of periods. All necessary materials must be taken from the lockers before assembly or during break-times.</p>

 

<p>PERSONAL GROOMING</p>

<p>2.8 School Uniform In General</p>
<p>2.8.1 Students must wear the prescribed school uniform and any modification is strictly not allowed except to alter the length of the skirt and pants.</p>
<p>2.8.2 Students are to wear white school shoes or predominantly white (>95%) track shoes. White socks must be worn and visible at all times.</p>
<p>2.8.3 If for any reason a student cannot wear shoes (e.g. blisters, in-grown nail, etc.), the Form Teacher must be informed with the support of a doctor’s recommendation or a parent’s letter.</p>

<p>For Boys</p>

<p>2.8.4 White shirts and green pants or shorts must be purchased from the authorized tailor.</p>
<p>2.8.5 Tapering of pants is strictly not allowed. The pants may be altered to the appropriate length only*</p>

<p>For Girls</p>

<p>2.8.6 Brassieres must only be white or beige. No other colours are acceptable. Sports brassieres may only be worn during sports training or PE lessons.</p>
<p>2.8.7 Skirts must be purchased from the authorized tailor. They should be at kneelength, i.e. touching the knee caps.</p>


<p>2.9 Hair</p>

<p>2.9.1 Hair must be kept neat and tidy at all times.</p>
<p>2.9.2 Fancy hair styling, tinting, dyeing, highlighting and bleaching of hair are strictly not allowed for all students.</p>

<p>For Boys</p>

<p>2.9.3 Male students must be neat in appearance and clean-shaven at all times. No facial hair is allowed.</p>
<p>2.9.4 Hair must not touch the collar and must be sloped at the sides and rear. No sideburns and ducktails are allowed. The fringe must be above the eyebrows and should not be spiky. Hair when combed down should not touch the eyebrows or/and the ears.</p>
<p>2.9.5 Hair must not be permed.</p>

<p>For Girls</p>

<p>2.9.6 Female students must be neat in appearance at all times.</p>
<p>2.9.7 Long hair must be neatly tied up with simple black ribbons, hair bands and/or hair clips. Hair touching the shoulders.</p>
<p>2.9.8 Fringes must be above the eyebrows or pinned with black clips must be neatly tied at all times behind the ears.</p>

<p>Class Committee</p>

<p>A Class Committee is set up in every class. This is one of the platforms for the students to exercise leadership in a safe and nurturing environment.</p>

 

<p>1. AIMS AND OBJECTIVES</p>

<p>To provide students the opportunity to develop their leadership potential

To promote a sense of responsibility among students by encouraging them to serve their classmates as well as the school

To foster class spirit by enabling students to deal with the day-to-day affairs of their class</p>

 

<p>2. DUTIES & RESPONSIBILITIES</p>

<p>2.1 CHAIRMAN

Helps maintain discipline of the class at all times

Is in charge of the Class Discipline File

Monitors class attendance and student movement

Assists in conveying information from school to his/her classmates

Chairs class meetings, which must be held at least once a term with form teachers

Helps organise class activities to promote class spirit

Ensures that lights and fans are switched off when classroom/facilities are not in use.</p>

 

<p>2.2 VICE-CHAIRMAN

Assists the Chairman in all his/her duties

Prepares the class duty roster and ensures the cleanliness of the classroom

Notifies the office if a teacher is absent or relief is not assigned

Keeps records of meetings

Manages class monetary matters and keeps financial records.</p>

 

<p>2.3 WELFARE HEAD

Ensures that Homework Board is updated daily

Rosters teams to decorate the class notice board

Ensures that educational articles are put up for display on the notice board and updated periodically

Reports defective equipment to the office, e.g. faulty fans, light, etc

Organises activities to cater to the overall wellbeing of the class – e.g. birthday cards, thank you card, etc

Assists teachers in carrying out VIA activities

Reports any safety issue to the Form Teacher or Operations Manager

Ensures that health-related articles are put up for display on the health notice board and updated periodically.</p>

 

<p>2.4 GREEN CHAMPION

Oversees activities related to environmental matters

Creates green awareness in the class through class or school green activities

Encourages classmates in the recycling effort

Supports school recycling programme on regular basis

Helps and runs the environmental activities in the school.</p>

 

<p>2.5 ICT REPRESENTATIVE

Is responsible for collecting and returning all ICT equipment

Assists teacher in setting up class for ICT lesson

Reports the breakdown of the ICT equipment to the ICT Department

Attends training sessions and meetings organised by the ICT Department.</p>

 

<p>2.6 SPORTS & SAFETY REPRESENTATIVE

Assists PE teacher during PE lessons

Is responsible for drawing out and returning equipment for PE lessons

Selects and prepares classmates for inter-class competitions

Assists teacher during emergency evacuation

Champions health and safety in class

Collects and submits safety & health-promoting suggestions to Form Teacher or PE teacher.</p>

 

<p>2.7 NATIONAL EDUCATION REPRESENTATIVE

Supports the Form Teacher in all matters related to National Education,

e.g. Commemorative Days, National Day, VIA, etc

Initiates actions which will help the class to better understand National Education

Ensures that the class noticeboard is decorated with National Education materials.</p>

 

<p>2.8 SUBJECT REPRESENTATIVES (4 positions)

At least 4 subject representative positions. Each subject representative is responsible for 2 subjects or more if necessary, e.g. Subject Rep, EL & CL, Subject Rep. History & Geography

Collects assignments/exercise books and hands in to the respective subject teachers during recess time

Keeps records of assignments handed in

Informs teachers if classmates fail to hand in assignments.</p>

        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <ul class="faq-list">

              
              <th scope="col">Order</th>
              <th scope="col">Name</th>
              <th scope="col">Sex</th>
              <th scope="col">Year & Section</th>
              <th scope="col">Course</th>
              <th scope="col">Date recorded</th>
              <th scope="col">Record complain</th>
              <th scope="col">Attempting</th>

            </tr>
          </thead>
          <tbody>
            <tr scope="row">
              <th scope="row">
                <label class="control control--checkbox">
                  <input type="checkbox"/>
                  <div class="control__indicator"></div>
                </label>
              </th>
              <td>
                1022
              </td>
              <td><a href="#">Mark Davis Osorio</a></td>
              <td>
                student
                <small class="d-block">Male</small>
              </td>
              <td>2nd year, 2A</td>
              <td>BS in Information Technology</td>
              <td>January 13, 2020</td>
              <td>Not wearing uniform attire</td>
              <td>three times</td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr>
              <th scope="row">
                <label class="control control--checkbox">
                  <input type="checkbox"/>
                  <div class="control__indicator"></div>
                </label>
              </th>
                 student
              <td>1023</td>
              <td><a href="#">Jayman Hamid</a></td>
              <td>
                student
                <small class="d-block">Male</small>
              </td>
              <td>2nd year, 2A</td>
              <td>BS in Information Technology</td>
               <td>January 22, 2020</td>
              <td>Cutting clases</td>
              <td>two times</td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr>
              <th scope="row">
                <label class="control control--checkbox">
                  <input type="checkbox"/>
                  <div class="control__indicator"></div>
                </label>
              </th>
              
              <td>1024</td>
              <td><a href="#">Mark Flores</a></td>
              <td>
                student
                <small class="d-block">Male</small>
              </td>
              <td>2nd year, 2A</td>
              <td>BS in Information Technology</td>
               <td>January 26, 2020</td>
              <td>Cutting classes in trice a week</td>
              <td>Last chance</td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr>
              <th scope="row">
                <label class="control control--checkbox">
                  <input type="checkbox"/>
                  <div class="control__indicator"></div>
                </label>
              </th>
              
              <td>1025</td>
              <td><a href="#">Kevin Orong</a></td>
              <td>
                student
                <small class="d-block">male</small>
              </td>
              <td>2nd year, 2A</td>
              <td>BS in Information Technology</td>
               <td>January 13, 2020</td>
              <td>Cursing words</td>
              <td>three times</td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr>
              <th scope="row">
                <label class="control control--checkbox">
                  <input type="checkbox"/>
                  <div class="control__indicator"></div>
                </label>
              </th>
              
              <td>1026</td>
              <td><a href="#">Erle Solamo</a></td>
              <td>
                student
                <small class="d-block">Male</small>
              </td>
              <td>2nd year, 2A</td>
              <td>BS in Information Technology</td>
               <td>February 10, 2020</td>
              <td>Grumbling every class hour</td>
              <td>two times</td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr>
              <th scope="row">
                <label class="control control--checkbox">
                  <input type="checkbox"/>
                  <div class="control__indicator"></div>
                </label>
              </th>
              
              <td>1027</td>
              <td><a href="#">Vincent Paul Perra</a></td>
              <td>
                student
                <small class="d-block">Male</small>
              </td>
              <td>2nd year, 2B</td>
              <td>BS in Information Technology</td>
               <td>March 03, 2020</td>
              <td>Online games in class hour</td>
              <td>two times</td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr>
              <th scope="row">
                <label class="control control--checkbox">
                  <input type="checkbox"/>
                  <div class="control__indicator"></div>
                </label>
              </th>

              <td>1028</td>
              <td><a href="#">Queenie Galarion</a></td>
              <td>
                student
                <small class="d-block">Female</small>
              </td>
              <td>2nd year, 2B</td>
              <td>BS in Information Technology</td>
               <td>January 13, 2020</td>
              <td>Filty language, disturb in class hour</td>
              <td>Last chnance</td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr>
              <th scope="row">
                <label class="control control--checkbox">
                  <input type="checkbox"/>
                  <div class="control__indicator"></div>
                </label>
              </th>

              <td>1029</td>
              <td><a href="#">Joshua Claudio</a></td>
              <td>
                student
                <small class="d-block">Male</small>
              </td>
              <td>2nd year, 2B</td>
              <td>BS in Information Technology</td>
              <td>March 03, 2022</td>
              <td>Grumbling every class hour</td>
              <td>three times</td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr>
              <th scope="row">
                <label class="control control--checkbox">
                  <input type="checkbox"/>
                  <div class="control__indicator"></div>
                </label>
              </th>

              <td>1030</td>
              <td><a href="#">Lourence Tumban</a></td>
              <td>
                student
                <small class="d-block">Male</small>
              </td>
              <td>2nd year, 2B</td>
              <td>BS in Information Technology</td>
              <td>November 23, 2022</td>
              <td>Physical abuse</td>
              <td>two times</td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr>
              <th scope="row">
                <label class="control control--checkbox">
                  <input type="checkbox"/>
                  <div class="control__indicator"></div>
                </label>
              </th>

              <td>2012</td>
              <td><a href="#">Paul Samson</a></td>
              <td>
                student
                <small class="d-block">Male</small>
              </td>
              <td>2nd year, 2D</td>
              <td>BS in Information Technology</td>
              <td>December 16, 2022</td>
              <td>class disturbing</td>
              <td>two times</td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr>
              <th scope="row">
                <label class="control control--checkbox">
                  <input type="checkbox"/>
                  <div class="control__indicator"></div>
                </label>
              </th>

              <td>2013</td>
              <td><a href="#">Anthony Ramerez</a></td>
              <td>
                student
                <small class="d-block">Male</small>
              </td>
              <td>2nd year, 2D</td>
              <td>BS in Information Technology</td>
              <td>January 18, 2022</td>
              <td>Bullying</td>
              <td>three times</td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr>
              <th scope="row">
                <label class="control control--checkbox">
                  <input type="checkbox"/>
                  <div class="control__indicator"></div>
                </label>
              </th>

              <td>2014</td>
              <td><a href="#">Jima Sakandal</a></td>
              <td>
                student
                <small class="d-block">Female</small>
              </td>
              <td>2nd year, 2D</td>
              <td>BS in Information Technology</td>
              <td>February 28, 2022</td>
              <td>class disturbing</td>
              <td>two times</td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr>
              <th scope="row">
                <label class="control control--checkbox">
                  <input type="checkbox"/>
                  <div class="control__indicator"></div>
                </label>
              </th>
              
              <td>3001</td>
              <td><a href="#">Gaspar Semeno</a></td>
              <td>
                student
                <small class="d-block">Male</small>
              </td>
              <td>2nd year, 2C</td>
              <td>BS in Information Technology</td>
              <td>February 10, 2022</td>
              <td>cutting classess</td>
              <td>three times</td>
            </tr>
            
          </tbody>
        </table>
      </div>
    <a href="logout.php">Logout</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>