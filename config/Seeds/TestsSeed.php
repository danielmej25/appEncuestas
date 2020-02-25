<?php
use Migrations\AbstractSeed;

/**
 * Tests seed.
 */
class TestsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        
        $arreglo = array();
        $data1 = [];
        $data1 []=[
            "id_test"=>"1",
            "name_test"=>"System Usability Scale (SUS)",
            "description_test"=>"En respuesta a estos requisitos, se desarrolló una escala de usabilidad simple. El sistema
            La escala de usabilidad (SUS) es una escala simple de diez elementos que ofrece una visión global de la subjetividad
            evaluaciones de usabilidad."
        ];
        $data2 = [];
        $data2 []=[
            "id_test"=>"2",
            "name_test"=>"After-Scenerio Questionnaire (ASQ)",
            "description_test"=>"El ASQ, desarrollado por (Lewis, 1995), debe entregarse a un sujeto de estudio después de que él / ella haya completado un
            escenario de condición normal"
        ];
        $data3 = [];
        $data3 []=[
            "id_test"=>"3",
            "name_test"=>"NASA's task load index (NASA-TLX)",
            "description_test"=>"El método del índice de carga de tareas de la NASA (TLX) de Hart y Staveland evalúa
                        carga de trabajo en cinco escalas de 7 puntos. Incrementos de alta, media y baja.
                        las estimaciones para cada punto dan como resultado 21 gradaciones en las escalas."
        ];
        $data4 = [];
        $data4 []=[
            "id_test"=>"4",
            "name_test"=>"Subjective Mental Effort Questionnaire (SMEQ)",
            "description_test"=>"SMEQ se compone de una sola escala, y mide el esfuerzo mental que las personas sienten que estuvo involucrado en una determinada tarea."
        ];
        $data5 = [];
        $data5 []=[
            "id_test"=>"5",
            "name_test"=>"Single Ease Question(SEQ)",
            "description_test"=>"Consiste en 1 pregunta de facilidad."
        ];
        $data6 = [];
        $data6 []=[
            "id_test"=>"6",
            "name_test"=>"Expected Usability Magnitude Estimation(UME)",
            "description_test"=>" El método es más válido, robusto y teóricamente basado que los métodos existentes. Permite la medición de expectativas que es fácil de administrar, simple de analizar y proporciona calificaciones de usabilidad reales y esperadas a lo largo de la misma escala de relación de usabilidad. Los datos de expectativas se utilizan para clasificar las tareas en agrupaciones de estrategias de diseño derivadas empíricamente basadas en una teoría refinada"
        ];
        $arreglo[0]=$data1;
        $arreglo[1]=$data2;
        $arreglo[2]=$data3;
        $arreglo[3]=$data4;
        $arreglo[4]=$data5;
        $arreglo[5]=$data6;
        $numeroTests=0;
        while($numeroTests<6){
            $table = $this->table('tests');
            $table->insert($arreglo[$numeroTests])->save();
            $numeroTests= $numeroTests+1;
        }
    }
}
