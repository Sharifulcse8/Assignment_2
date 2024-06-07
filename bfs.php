<?php
  $N = 4;

  function addEdge(&$adj, $source, $destination) {
      $adj[$source][] = $destination;
      $adj[$destination][] = $source;
  }

  function bfs($adj, $vertices, $source) {
      $visited = array_fill(0, $vertices, false);
      $queue = [];
      $visited[$source] = true;
      array_push($queue, $source);

      while (!empty($queue)) {
          $res = array_shift($queue);
          echo $res ." ";

          foreach ($adj[$res] as $x) {
              if ($visited[$x] == false) {
                  $visited[$x] = true;
                  array_push($queue, $x);
              }
          }
      }
  }

  $v = $N;
  $adj = array_fill(0, $v, array());

  addEdge($adj, 0, 1);
  addEdge($adj, 0, 2);
  addEdge($adj, 0, 3);
  addEdge($adj, 2, 3);

  bfs($adj, $v, 0);
?>
