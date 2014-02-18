<!-- File: /app/View/Posts/index.ctp -->
<h1>Blog Articles</h1>
<table>
<tr>
<th>Id</th>
<th>Title</th>
<th>Created</th>
</tr>
<!-- Here is where we loop through our $posts array, printing out post info -->
<?php foreach ($Articles as $article): ?>
<tr>
<td><?php echo $aost[・Article・][・id・]; ?></td>
<td>
<?php echo $this->Html->link($article[・Article・][・title・],
array(・controller・ => ・posts・, ・action・ => ・view・, $article[・Article・][・id・])); ?>
</td>
<td><?php echo $article[・Article・][・created・]; ?></td>
</tr>
<?php endforeach; ?>
<?php unset($article); ?>
</table>