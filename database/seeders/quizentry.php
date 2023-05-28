<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class quizentry extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       DB::table('quizs')->insert(
           [
               'question'=>'If a giraffe has two eyes, a monkey has two eyes, and an elephant has two eyes, how many eyes do we have?',
               'ansid'=>'2',
               'q1'=>'three',
               'q2'=>'four',
               'q3'=>'two',
               'q4'=>'one',

           ]
           );
           DB::table('quizs')->insert(
            [
                'question'=>'One rabbit saw 6 elephants while going towards River. Every elephant saw 2 monkeys are going towards river. Every monkey holds one tortoise in their hands.
                How many animals are going towards the river?',
                'ansid'=>'2',
                'q1'=>'14',
                'q2'=>'5',
                'q3'=>'8',
                'q4'=>'11',
 
            ]
            );
            DB::table('quizs')->insert(
                [
                    'question'=>'1+1=?',
                    'ansid'=>'4',
                    'q1'=>'2',
                    'q2'=>'11',
                    'q3'=>'10',
                    'q4'=>"can't say",
     
                ]
                );
                DB::table('quizs')->insert(
                    [
                        'question'=>'A F Z U G L T _ ',
                        'ansid'=>'3',
                        'q1'=>'K',
                        'q2'=>'M',
                        'q3'=>'O',
                        'q4'=>'Q',
         
                    ]
                    );
                     DB::table('quizs')->insert(
           [
               'question'=>"There is a man found dead in a circular mansion. The detective interviews the cook, maid, and babysitter. The cook said he couldn't have done it because he was preparing the meal. The maid said she couldn't have done it because she was dusting the corners. The babysitter said she couldn't because she was playing with the children. Who was lying?",
               'ansid'=>'2',
               'q1'=>'Babysitter',
               'q2'=>'maid',
               'q3'=>'cook',
               'q4'=>'no one',

           ]
           );

           DB::table('quizs')->insert(
            [
                'question'=>'Poor people have it.Rich people need it.If you eat it you die.',
                'ansid'=>'3',
                'q1'=>'Luxury',
                'q2'=>'Money',
                'q3'=>'Nothing',
                'q4'=>'Brain',
 
            ]
            );   
   
            DB::table('quizs')->insert(
                [
                    'question'=>'Key, Door, Lock, Room, Switch on
                    Arrange the words given above in a meaningful sequence.',
                    'ansid'=>'2',
                    'q1'=>'4, 2, 1, 5, 3',
                    'q2'=>'1, 3, 2, 4, 5',
                    'q3'=>'1, 2, 3, 5, 4',
                    'q4'=>'5, 1, 2, 4, 3',
     
                ]
                );
       
                 DB::table('quizs')->insert(
                     [
                         'question'=>'Can you guess key of a lock using this clue?
                         682-one digit is right and in its place.
                         614-one digit right but in wrong place.
                         206-two digit right but in wrong place.
                         738-all digits wrong.
                         380-one digit right but in wrong place.',
                         'ansid'=>'4',
                         'q1'=>'200',
                         'q2'=>'320',
                         'q3'=>'142',
                         'q4'=>'042',
          
                     ]
                     );
                     DB::table('quizs')->insert(
                         [
                             'question'=>"A man is standing in front of a painting of a man, and he tells us the following: Brothers and sisters have I none, but this man's father is my father's son. Who is on the painting?",
                             'ansid'=>'4',
                             'q1'=>'His father',
                             'q2'=>'He himself',
                             'q3'=>"His father's brother",
                             'q4'=>'His son',
              
                         ]
                         );
                          DB::table('quizs')->insert(
                [
                    'question'=>'Alexander the Great died aged only 32, but how?',
                    'ansid'=>'2',
                    'q1'=>'trampled by an elephant',
                    'q2'=>'a bout of eating and drinking ',
                    'q3'=>'a hunting accident',
                    'q4'=>'none of these',
     
                ]
                );
                DB::table('quizs')->insert(
                 [
                     'question'=>'According to the Chinese calendar 2021 is the year of which animal?',
                     'ansid'=>'1',
                     'q1'=>'ox',
                     'q2'=>'cow',
                     'q3'=>'monkey',
                     'q4'=>'panda',
      
                 ]
                 );   
                 DB::table('quizs')->insert(
                    [
                        'question'=>'The Oscar winning Best Song ‘Jai Ho’ was from which 2009 film?',
                        'ansid'=>'1',
                        'q1'=>'Slumdog Millionaire',
                        'q2'=>'Gandhi',
                        'q3'=>'Pather Panchali ',
                        'q4'=>'Mother India',
         
                    ]
                    );
                    DB::table('quizs')->insert(
                     [
                         'question'=>'What is the term for the smallest unit of data managed by a computer?',
                         'ansid'=>'2',
                         'q1'=>'int',
                         'q2'=>'bit',
                         'q3'=>'byte',
                         'q4'=>'char',
          
                     ]
                     );

                     DB::table('quizs')->insert(
                         [
                             'question'=>' According to the proverb, "All roads lead to…." where?',
                             'ansid'=>'2',
                             'q1'=>'success',
                             'q2'=>'rome',
                             'q3'=>'difficulties',
                             'q4'=>'atlanta',
              
                         ]
                         );
                         DB::table('quizs')->insert(
                             [
                                 'question'=>'What is the collective name for the three magical objects (a wand, a stone and an
                                 invisibility cloak) which when owned by one person are said to give mastery over death?',
                                 'ansid'=>'4',
                                 'q1'=>'Chamber of Secrets',
                                 'q2'=>"Philosopher's Stone",
                                 'q3'=>'Goblet of Fire',
                                 'q4'=>'Deathly Hallows',
                  
                             ]
                             );
                              DB::table('quizs')->insert(
                    [
                        'question'=>'Which country do the Patonga Proudsticks quidditch team play out of',
                        'ansid'=>'1',
                        'q1'=>'uganda',
                        'q2'=>'rwanda',
                        'q3'=>'ethiopia',
                        'q4'=>'atlanta',
         
                    ]
                    );
                    DB::table('quizs')->insert(
                     [
                         'question'=>"What is the name of the loony Ravenclaw student from the year below Harry who's big
                         green eyes are said to give her a 'permanently surprised look'? ",
                         'ansid'=>'2',
                         'q1'=>'Marcus Belby',
                         'q2'=>'Luna Lovegood.',
                         'q3'=>'Padma Patil',
                         'q4'=>'Michael Corner',
          
                     ]
                     );   
       
                     DB::table('quizs')->insert(
                        [
                            'question'=>'Which term refers to wizards and witches who have both magic and Muggle ancestors?',
                            'ansid'=>'1',
                            'q1'=>'Half bloods',
                            'q2'=>'Galleon',
                            'q3'=>'Wand',
                            'q4'=>'warlock',
             
                        ]
                        );
                        DB::table('quizs')->insert(
                         [
                             'question'=>'In cricket, who were the 2015 Indian Premier League champions?',
                             'ansid'=>'1',
                             'q1'=>'MI',
                             'q2'=>'CSK',
                             'q3'=>'KKR',
                             'q4'=>'DC',
              
                         ]
                         );
                         DB::table('quizs')->insert(
                             [
                                 'question'=>'From which region of India does the dance form Bhangra originate',
                                 'ansid'=>'1',
                                 'q1'=>'punjab',
                                 'q2'=>'mumbai',
                                 'q3'=>'gujarat',
                                 'q4'=>'orissa',
                  
                             ]
                             );
                             DB::table('quizs')->insert(
                                 [
                                     'question'=>"What is India's most successful sport in the Olympics?",
                                     'ansid'=>'2',
                                     'q1'=>'kabadi',
                                     'q2'=>'hockey',
                                     'q3'=>'boxing',
                                     'q4'=>'wrestling',
                      
                                 ]
                                 );

                 

                        DB::table('quizs')->insert(
                         [
                             'question'=>"What is the name of Joyce Byers' ex-husband, father of Will and Jonathan Byers?
                             STRANGER THINGS",
                             'ansid'=>'1',
                             'q1'=>' Lonnie',
                             'q2'=>' Donny ',
                             'q3'=>'Johnny',
                             'q4'=>'Kittitas',
              
                         ]
                         );  
                         DB::table('quizs')->insert(
                            [
                                'question'=>'Which character memorably shouts "Mike! I found the chocolate pudding!"',
                                'ansid'=>'1',
                                'q1'=>'Dustin',
                                'q2'=>'Donny',
                                'q3'=>'Eleven',
                                'q4'=>'Mike Wheeler',
                 
                            ]
                            );                
                         
                            DB::table('quizs')->insert(
                                [
                                    'question'=>'What is the name of the fictional town where the show is set?',
                                    'ansid'=>'1',
                                    'q1'=>' Hawkins',
                                    'q2'=>'Hoh',
                                    'q3'=>' Kittitas',
                                    'q4'=>'Hogwarts',
                     
                                ]
                                );                
                             
   
        }

}
