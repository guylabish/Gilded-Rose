# Gilded-Rose

refactoring steps

First it took me a while to understand how to run the tests because I wasn't really used to phpunit (that part took me more time than to work on the code). 

Once everything was settled and that I could start running the test, I opened the code in Phpstorm and I directly reformat the code to obtain something cleaner and more compact. 

The main target of my refactoring was the updateQuality function. Mainly because if there is any new item in the shop it's gonna be really difficult to implement it.

After a fist look I realised that some string where repeted and very long.

Then I try to reorganise the events based on each products. To have overall conditions instead of conditions inside conditions.


.\vendor\bin\phpunit --bootstrap vendor\autoload.php test\gildedrosetest
