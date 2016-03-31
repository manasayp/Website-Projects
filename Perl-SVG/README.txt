1. CSV input file with comments,blank lines,leading and trailing whitespace for 
   each token which is split on ',' is handled.
2. Phone type is validated => {'android','ios','windows'} 
3. Number of users is validated => numeric [ 0 -9]
4. Circle is used for displaying,if screen size > 1000px
5. For screen size < 1000px, bar graph is used to display the distribution
6. SVG Elements are display in the sorted order of number of users
