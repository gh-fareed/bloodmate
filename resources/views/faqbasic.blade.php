@include('layouts.websiteheader')
<body>
    <div class="wrapper">
      <h1>Frequently Asked Questions</h1>
      <div class="faq">
        <button class="accordion">
          What kind of face mask can I wear when donating blood?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            If donors wish to wear a mask, we strongly encourage our donors to wear single use surgical face masks or N95 masks instead of cloth masks when donating blood if possible. This is to ensure all our staff and donors are protected as the cloth masks can vary in effectiveness. If you do not have a surgical face mask, we can provide you with one.
          </p>
        </div>
      </div>
      <div class="faq">
        <button class="accordion">
          If I've been diagnosed with COVID-19, when can I donate blood?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Currently, you may donate blood when you have completed all required public health follow up and 7 days after you've made a full recovery from COVID-19. The 7 days begins on the first day once you are symptom-free.

            If you are diagnosed with COVID-19 but do not develop any symptoms, you may donate blood 7 days after the date of the positive test result.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          You say someone needs to be ‘fit and well’ to donate. What defines ‘fit and well’?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            All donors need to feel well to be eligible to donate blood. We also ask donors to complete a questionnaire, which includes questions which aim to protect both the health and well-being of the donor and the patient who may receive their blood.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          How do I know if I can donate blood?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
           Take our eligibility quiz 
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          I take blood pressure medicine. Can I donate?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Yes, providing your blood pressure is adequately controlled, stable, and you don’t have any side effects related to your medication.
          </p>
        </div>
      </div>
    </div>
    <script>
      var acc = document.getElementsByClassName("accordion");
      var i;
      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
          this.classList.toggle("active");
          this.parentElement.classList.toggle("active");
          var pannel = this.nextElementSibling;
          if (pannel.style.display === "block") {
            pannel.style.display = "none";
          } else {
            pannel.style.display = "block";
          }
        });
      }
    </script>
@include('layouts.websitefooter')
  </body>