<?php

const PIC_SUM = 80;
const PIC_CRAYON = 23;
const PIC_PENCIL = 40;
const PIC_PAINTS = PIC_SUM - PIC_CRAYON - PIC_PENCIL;

echo "На школьной выставке 80 рисунков. 23 из них выполнены фломастерами, 40 карандашами, а остальные — красками. Сколько рисунков, выполненные красками, на школьной выставке?";
echo "<br>";
echo "Ответ:";
echo PIC_PAINTS;