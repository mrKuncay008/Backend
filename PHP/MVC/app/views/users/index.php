<div class="container pt-5 mt-5 ">
  <table class="table table-active container ">
    <thead class="thead-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Id</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Gender</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach($data['usr'] as $usr) : ?>
      <tr>
        <th scope="row"><?= $i; ?></th>
        <td><?= $usr['user_id']?></td>
        <td><?= $usr['username']?></td>
        <td><?= $usr['last_name']?></td>
        <td><?= $usr['gender']?></td>
      </tr>
      <?php $i++; ?>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>