#Manasa Nagaraju, Id : 00001189995
#!/usr/bin/perl
open( $inputFile, "<cell-phones.csv" ) || die "Error : $!";
my @lines = <$inputFile>;
close( $inputFile );
my %totalUsers;

#Read each line from CSV
foreach my $line ( @lines ) {
  # Skipping if the line is empty or a comment
  next if ( $line =~ /^\s*$/ );
  next if ( $line =~ /^\s*#/ );
  chomp($line);
  my ($schoolName, $phType, $numUsers) = split( /,/, $line );
  #remove leading and trailing whitespace
  $phType =~ s/^\s+|\s+$//g;
  $numUsers =~ s/^\s+|\s+$//g;
  #check if phone type is only alphabets and numUsers is numeric
  if(($phType =~ m/^(android|ios|windows)/) && ($numUsers =~ /^\d+?$/))
  {
      #print "Number of users of $phType : $numUsers\n";
      $totalUsers{$phType} += $numUsers;
  }
  else
  {
      print "$line\n";
      print "Error : Invalid CSV File\n";
	  exit;
  }
}
printHTML();

#Function to Print the HTML to output file
sub printHTML {
    my $filename = "cell-phones_00001189995.html";
    open( my $file, ">", $filename ) or die;
    print $file '<!DOCTYPE html>';
    print $file '<html style="width:100%;height:100%;">';
    print $file '<head><title>Distribution Graph</title>';
    print $file '<link type=\'text/css\' rel=\'stylesheet\' href=\'styles.css\'/>';
    print $file '<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
	         <meta name="viewport" content="width=device-width, minimum-scale=1.0"></head>';
    print $file '<body style="width:100%;height:100%;margin:0;">';
    print $file '<header><h1>Mobile Phone Usage Graph</h1></header>';
    print $file '<svg height="100%" width="100%" xmlns=http://www.w3.org/2000/svg version="1.1">';

    @color = ("#ff0000","#0040ff","#006600");
    foreach my $pType (sort {$totalUsers{$a} <=> $totalUsers{$b} } keys %totalUsers) {
        print "Number of users of $pType : $totalUsers{$pType}\n";
	    display($pType,$totalUsers{$pType},$file,shift(@color));
    }
    print $file '</svg></body></html>';
    close($file);
}

#Function to Print the SVG to HTML output
BEGIN{
	$x1 = 100;
	$y1 = 200;
	$x2 = 100;
	$y2 = 150;
	sub display {
	    my @list = @_;
	    my $color = $list[3];
	    my $file = $list[2];
	    $list[0] =~ tr/a-z/A-Z/;
	
	    #Display of circles to represent each phone type
	    my $g1_radius = $list[1] / 10;
	    my $g1_x = $x1 + $g1_radius;
	    my $g1_y = $y1+$g1_radius+30;
	    $x1 += $g1_radius;
	    print $file "<g class=\"g1\">";
	    print $file "<circle cx=\"$x1\" cy=\"$y1\" r=\"$g1_radius\" style=\"stroke:#000000;stroke-width:3;fill:$color\"/>";
	    print $file "<text x=\"$g1_x\" y=\"$g1_y\" text-anchor=\"middle\" style=\"fill:#000000;stroke:#484848;font-size:12px;\">$list[0]</text>";
	    $g1_y += 20;
		print $file "<text x=\"$g1_x\" y=\"$g1_y\" text-anchor=\"middle\" style=\"fill:#000000;stroke:#484848;font-size:12px;\">(Users:$list[1])</text>";
		print $file "</g>";
	    $x1 = $x1+$g1_radius+50;
	
	    #Display of rectangle to represent phone users if screen size < 1000px
	    my $height = $list[1] / 10;
	    $y2 -= $height;
	    my $g2_x = $x2 + 25;
	    print $file "<g class=\"g2\">";
	    print $file "<rect x=\"$x2\" y=\"$y2\" width=\"50\" height=\"$height\" style=\"fill:$color;stroke-width:3;stroke:#000000\" />";
	    #print $file "<text x=\"$g2_x\" y=\"$y2\" style=\"writing-mode: tb;\" \"fill:#000000;stroke:#484848;font-size:8px;\">$list[1]</text>";
	    $x2 = $x2+50;
	    $y2 = $y2+$height;
	    my $g2_y = $y2+10; 
	    #$g2_x -= 25;
	    print $file "<text x=\"$g2_x\"y=\"$g2_y\" text-anchor=\"middle\" style=\"fill:#000000;stroke:#484848;font-size:8px;\">$list[0]</text>";
	    $g2_y += 20;
		print $file "<text x=\"$g2_x\" y=\"$g2_y\" text-anchor=\"middle\" style=\"fill:#000000;stroke:#484848;font-size:12px;\">($list[1])</text>";
		print $file "</g>";
    }
}