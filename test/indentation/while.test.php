<?php

// @todo BUG `while (expr) :` should increase indentation not just the next line
// @todo BUG `start-tag while (expression) : end-tag (HTML block) should increase indentation

function start_with_at_least_one_indent() {

                $i = 1;
                while ($i <= 4) {
                    echo "$i\t".($i * $i)."\n";
                    $i++;
                }
                var_dump($i);

                $i = 1;
                while ($i <= 4)
                {
                    echo "$i\t".($i * $i)."\n";
                    $i++;
                }
                var_dump($i);

                $i = 1;
                while ($i <= 4) { echo "$i\t".($i * $i)."\n"; $i++; }
                var_dump($i);

                $i = 1;
                while ($i <= 4) :
                    echo "$i\t".($i * $i)."\n"; ++$i;
                endwhile;
                var_dump($i);

                $i = 1;
                while ($i <= 4) : echo "$i\t".($i * $i)."\n"; ++$i; endwhile;
                var_dump($i);

                $i = 1;
                while ($i <= 4) ++$i; echo "$i\t".($i * $i)."\n";
                var_dump($i);

                $i = 1;
                while ($i <= 4)
                    ++$i; echo "$i\t".($i * $i)."\n";
                var_dump($i);

                ?>
                <?php $i = 1; ?>
                <?php while ($i <= 4) : ?>
                <?= "$i\t".($i * $i)."\n"; ?>
                <?php $i++; ?>
                <?php endwhile; ?>
                <?php var_dump($i); ?>
                <?php

}

var_dump('begin...');
start_with_at_least_one_indent();
var_dump('done.');
