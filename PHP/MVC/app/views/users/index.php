<div class="container pt-5 mt-5 ">
  <table class="table table-active container ">
    <thead class="thead-dark">
      <tr>
        <!-- <th scope="col">No</th> -->
        <th scope="col">Id</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Gender</th>
      </tr>
    </thead>
    <tbody>
      <!-- <?php $i = 1; ?> -->
      <?php foreach($data['usr'] as $usr) : ?>
      <tr>
        <!-- <th scope="row"><?= $i; ?></th> -->
        <td><?= $usr['ID']?></td>
        <td><?= $usr['Firstname']?></td>
        <td><?= $usr['Lastname']?></td>
        <td><?= $usr['Email']?></td>
        <td><?= $usr['Gender']?></td>
      </tr>
      <!-- <?php $i++; ?> -->
      <?php endforeach; ?>
    </tbody>
  </table>
  <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#Input-data">
  Add Data
</button>
<!-- Modal Form -->
<div class="modal fade" id="Input-data" tabindex="-1" role="dialog" aria-labelledby="Input-data" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Input-data">Please Input Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL;?>/users/add" method="post">
      <!--
        '/users/add' akan diterjemahkan menjadi panggilan ke metode add dalam controller Users.php 
        Atribut action dalam tag <form> HTML menentukan URL yang akan dituju ketika formulir dikirimkan. 
        Dalam aplikasi berbasis MVC, URL ini seringkali digunakan untuk menentukan 
        controller dan metode mana yang harus menangani data formulir yang dikirim.
      -->
          <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>

          <div class="form-group">
            <label for="firstname">Firstname</label>
            <input type="firstname" class="form-control" id="firstname" name="firstname" placeholder="Enter Firstname">
          </div>

          <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="lastname" class="form-control" id="lastname"  name="lastname" placeholder="Enter Lastname">
          </div>

          <select class="form-control mb-3" id="gender" name="gender">
            <option value="" disabled>Choose Gender</option>
            <option value="Male">Male</option>
            <option value="Famale">Famale</option>
            <option value="Other">Other</option>
          </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save data</button>
      </form>
      </div>
    </div>
  </div>
</div>
</div>