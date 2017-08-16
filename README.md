# Cs3620Final

I really enjoyed this class.  I have a better understanding of RestApi development.  I spent a ton of time working on this project.
The majority of which was trying to get composer to install codeception and slim.  I finally was able to get that to work by 
downloading a exe file for windows that changed some of the php.ini file to work with windows and also had to throw out the 
final prep seed i branched from as it was incompatible with windows.  After creating the new project and running the exe the 
composer loaded codeception and slim like it was supposed to.  After that all the unit tests worked right.  I tried to use the 
dependendy injection container and inject the dependencies in 3 different interfaces on for user db adapter with redis, and the other
2 were for mysql adapters for Message and Room.  After working for hours and hours i was unable to get my routes to work.  I think it
has to do with wamp and the .htaccess file.  But i was not able to find the error.
  I learned a lot about php doing this project.  My understanding of the concept of loosly coupled dependancies has increased and 
  I believe if i had more time i could figure out why my routes do not work.  When i use get / it communicates with the server, but 
  if i try get/http://Cs3620Final/Message  or anything else it would give a 404 not found error.  Never did figure out why.  Have a good
  couple of weeks off see you Fall semester!
  
  Blake
