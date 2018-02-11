<div class="card">
  <div class="card-header">ข้อมูลของ
  <div class="float-right"><a href="/user/edit/<?php echo $user->user_id ?>" class="btn btn-warning">แก้ไข</a></div></div>

  <div class="card-body">
    <p><strong>ชื่่อ : </strong><?php echo $user->name?></p>
   <p><strong>อีเมล์ : </strong><?php echo $user->email?></p>
   <p><strong>อายุ : </strong><?php echo $user->age?></p>
  </div>
  </div>
</div>