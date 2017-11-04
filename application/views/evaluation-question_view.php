<?php include"header.php"; ?>
<table class="table table-condensed">
	<form action=/submit_answer method=GET>
		
	
    <thead>
      <tr>
        <th>Question</th>
        <th>1</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>

      </tr>
    </thead>
    <tbody>
    	<?php foreach ($questions as $question): ?>
			<tr>
				<td><?php echo $question['question_question'] ?></td>
				<td><input type="radio" name="<?php echo $question['question_id'] ?>" value="1"></td>
				<td><input type="radio" name="<?php echo $question['question_id'] ?>" value="2"></td>
				<td><input type="radio" name="<?php echo $question['question_id'] ?>" value="3"></td>
				<td><input type="radio" name="<?php echo $question['question_id'] ?>" value="4"></td>
				<td><input type="radio" name="<?php echo $question['question_id'] ?>" value="5"></td>
			</tr>




    	<?php endforeach ?>
      

    </tbody>
  </table>
  <div class="float-right">
  	<button type="submit">Submit</button>
  </div>
  	
	</form>




<?php include"footer.php"; ?>