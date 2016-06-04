<section class="part1">
   <div>
      <header>
        <h1 class="logo"></h1>
        <nav>

        </nav>
      </header>
      <div class="rellax paralax" data-rellax-speed="7">

      </div>

      <div class="part1-content rellax" data-rellax-speed="3">
        <img src="../../assets/img/part1_bg.png"/>
      </div>
   </div>

 </section>

 <section class="part2">

  <div class="part2-content">
    <p class="rellax paralax1" data-rellax-speed="7"></p>

    <div>
      <h1>ONTDEK DE COLLECTIE</h1>
      <button>ONTDEK</button>
    </div>
    <img src="../../assets/img/tshirt.png">
  </div>

</section>


 <section class="part3">
  <div class="part3-content">
    <h1>HOE WERKT HET?</h1>

    <div class="part3-list">
      <ul>
        <li class="list1">
          <h2>&nbsp;1&nbsp;</h2>
          <p class="test">Je maakt een persoonlijk account aan</p>
        </li>

        <li class="list1 list2">

          <img src="../../assets/img/kaartjes.png">
          <div>
            <h2>2</h2>
            <p>Selecteer een abonnement</p>
          </div>

        </li>
      </ul>

      <ul>
        <li class="list3">
          <h2>&nbsp;3&nbsp;</h2>
          <img src="../../assets/img/tas.png">
          <p class="test">Ga op zoek naar nieuwe artikels die je wil ontlenen</p>
        </li>
      </ul>

      <ul>
        <li class="list2 list4">
          <div>
            <h2>&nbsp;4&nbsp;</h2>
            <p>Reserveer artikelen online</p>
          </div>
        </li>

        <li class="list1 list5">
          <div>
            <h2>&nbsp;5&nbsp;</h2>
            <p class="test">Haal je artikelen op in de Hoogstraat</p>
          </div>
          <img src="../../assets/img/building.png">
        </li>
      </ul>

    </div>

    <button class="gavanstart">GA VAN START</button>

  </div>

 </section>

 <section class="part4">
  <div class="part4-content">
    <h1>ONZE ABONNEMENTEN</h1>
    <ul class="abbo">
      <li class="border">
        <h2>€25</h2>
        <h3>50 punten</h3>
        <ul class="features">
          <li>Feature 1</li>
          <li>Feature 2</li>
          <li>Feature 3</li>
        </ul>

      <a name="linktoregister"><h4 class="button1">Ik wil 50 punten</h4></a>
      </li>

      <li class="middle border">
        <h2>€65</h2>
        <h3>200 punten</h3>
        <ul class="features">
          <li>Feature 1</li>
          <li>Feature 2</li>
          <li>Feature 3</li>
        </ul>
        <h4 class="button2">Ik wil 200 punten</h4>
      </li>

      <li class="border">
        <h2>€150</h2>
        <h3>500 punten</h3>
        <ul class="features">
          <li>Feature 1</li>
          <li>Feature 2</li>
          <li>Feature 3</li>
        </ul>
        <h4 class="button3">Ik wil 500 punten</h4>
      </li>
    </ul>
  </div>
 </section>

  <section class="part5">
    <a id="registerform"></a>
    <div class="part5-content">
      <div class="part51">
      <div class="part5-1">
        <div class="registration-title"><hr class="title1-hr"><h2>Time to go!</h2></div>
        <p>Ben jij klaar voor de nieuwe shopping experience? Klaar om een volledige straat als persoonlijke kleerkast ter beschikking te hebben? Dan kan je je nu via dit formulier of via de registratiepagina op de webshop inschrijven. Na inschrijving bepaal je hier nog welk abonnement je wilt, je betaalt en je kan meteen gaan kiezen!</p>
      </div>

      <button class="registered-button">AL INGESCHREVEN?</button>
    </div>

    <form id="registerform" action="index.php?page=home" method="post">
      <div class="form-title"><h2>REGISTRATIE</h2><hr class="title2-hr"></div>

      <div class="inputs">
        <input placeholder="Voornaam" type="text" value="<?php if(!empty($_POST['voornaam'])) echo $_POST['voornaam'];?>" <?php if(!empty($errors['voornaam'])) echo "class='error'";?> name="voornaam">
       <?php if(!empty($errors['voornaam'])) echo '<span class="error-message">' . $errors['voornaam'] . '</span>'; ?>

        <input placeholder="Achternaam" type="text" name="achternaam" value="<?php if(!empty($_POST['achternaam'])) echo $_POST['achternaam'];?>" <?php if(!empty($errors['achternaam'])) echo "class='error'";?> >
        <?php if(!empty($errors['achternaam'])) echo '<span class="error-message">' . $errors['achternaam'] . '</span>'; ?>

        <input placeholder="Email adres" type="text" name="email" value="<?php if(!empty($_POST['email'])) echo $_POST['email'];?>" <?php if(!empty($errors['email'])) echo "class='error'";?>>
        <?php if(!empty($errors['email'])) echo '<span class="error-message">' . $errors['email'] . '</span>'; ?>

        <input placeholder="Telefoonnummer" type="number" name="telefoon" value="<?php if(!empty($_POST['telefoon'])) echo $_POST['telefoon'];?>" <?php if(!empty($errors['telefoon'])) echo "class='error'";?>>
        <?php if(!empty($errors['telefoon'])) echo '<span class="error-message">' . $errors['telefoon'] . '</span>'; ?>

        <input placeholder="Wachtwoord" type="password" name="wachtwoord" <?php if(!empty($errors['wachtwoord'])) echo "class='error'";?>>
        <?php if(!empty($errors['wachtwoord'])) echo '<span class="error-message">' . $errors['wachtwoord'] . '</span>'; ?>

        <select name="subscription" class="subscription" value="<?php if(!empty($_POST['subscription'])) echo $_POST['subscription'];?>">
          <option value="50">€25 - 50punten</option>
          <option value="200">€65 - 200</option>
          <option value="500">€150 - 500punten</option>
        </select>
      </div>



      <button type="submit" class="register-button">Registreer</button>

    </form>

    </div>
  </section>


