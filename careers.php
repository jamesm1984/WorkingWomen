<?php $pagename="Careers"; ?>
<?php include("includes/head.php"); ?>
<?php include("includes/topbar.php"); ?>
  <div class="container">

    <div id="wrapper">

      <section class="careers">
        
        <h2>Job Opportunities At Working Women Community Centre</h2>
        
        <p>At Working Women Community Center We have years of experience working with people in community throgh provided job opportunities to immigrant from different countries. This help them gain the skills needed to secure meaningful employment. We also have  about 300 Volunteers that help use plan for events, doing community work that helps them gain hours if they students</p>
        
        <section id="volunteerPositions">
            <div id="headerBarV">
              <img id="indicatorV"> <p>Volunteer Positions</p>
            </div>
            <div id="ledgendV" class="hidden">
              <p>Positions<span>Location</span></p>
            </div>
            <ul id="jobListingsV" class="hidden">
              <li><p>Positions<span>Location</span></p><a href="#application"><button id="vJob1">Apply</button></a></li>
              <li><p>Positions<span>Location</span></p><a href="#application"><button id="vJob2">Apply</button></a></li>
              <li><p>Positions<span>Location</span></p><a href="#application"><button id="vJob3">Apply</button></a></li>
              <li><p>Positions<span>Location</span></p><a href="#application"><button id="vJob4">Apply</button></a></li>
              <li><p>Positions<span>Location</span></p><a href="#application"><button id="vjob5">Apply</button></a></li>
              <li><p>Positions<span>Location</span></p><a href="#application"><button id="vJob6">Apply</button></a></li>
              <li><p>Positions<span>Location</span></p><a href="#application"><button id="vJob7">Apply</button></a></li>
              <li><p>Positions<span>Location</span></p><a href="#application"><button id="vJob8">Apply</button></a></li>
            </ul>
        </section>
        
        <section id="jobPositions">
          <div id="headerBarJ">
              <img id="indicatorJ"> <p>Job Positions</p>
            </div>
            <div id="ledgendJ">
              <p>Positions<span>Location</span></p>
            </div>
            <ul id="jobListingsJ">
              <li><p>Positions<span>Location</span></p><a href="#application"><button id="jJob1">Apply</button></a></li>
              <li><p>Positions<span>Location</span></p><a href="#application"><button id="jJob2">Apply</button></a></li>
              <li><p>Positions<span>Location</span></p><a href="#application"><button id="jJob3">Apply</button></a></li>
              <li><p>Positions<span>Location</span></p><a href="#application"><button id="jJob4">Apply</button></a></li>
              <li><p>Positions<span>Location</span></p><a href="#application"><button id="jjob5">Apply</button></a></li>
              <li><p>Positions<span>Location</span></p><a href="#application"><button id="jJob6">Apply</button></a></li>
              <li><p>Positions<span>Location</span></p><a href="#application"><button id="jJob7">Apply</button></a></li>
              <li><p>Positions<span>Location</span></p><a href="#application"><button id="jJob8">Apply</button></a></li>
            </ul>
        </section>

        <section id="application">
          <h2>Apply for Position</h2>
          <form action="thankyou.php" method="post">
            <div class="appContainer"><p>First Name<textarea id="fn" name="fn"></textarea></p></div>
            <div class="appContainer"><p>Last Name<textarea id="ln" name="ln"></textarea></p></div>
            <div class="appContainer"><p>Email Adress<textarea  id="ea" name="ea"></textarea></p></div>
            <div class="appContainer"><p>Resume<textarea id="r" name="r"></textarea></p></div>
            <button id="submit">Submit</button>
          </form>
        </section>

      </section>

      <aside id="sideImage"></aside>

    </div>

  </div>
<?php include("includes/footer.php"); ?>