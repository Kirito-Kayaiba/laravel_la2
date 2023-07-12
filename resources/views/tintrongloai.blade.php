<h1>Tin trong loại</h1>
@php
foreach ($data as $tin) {
  echo "<div class='row'>";
  echo "<h3>{$tin->tieude}</h3>";
  echo "<p>{$tin->tomtat}</p>";
  echo "</div><hr>";
}
@endphp