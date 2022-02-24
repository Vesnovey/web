PROGRAM PrintHello(INPUT, OUTPUT);
USES
  Dos;

VAR
  m: INTEGER;
  Check: STRING;

FUNCTION GetQueryStringParameter(Key: STRING): STRING;
VAR
  S: STRING;
  f, l: INTEGER;
BEGIN  
  S := (GetEnv('QUERY_STRING'));
  f := length(S)-Pos(Key, S);
  l := Pos('&', S) - 1;
  WRITELN(Copy(S, f, l))  

END;

BEGIN {PrintHello}
  WRITELN('First Name: ', GetQueryStringParameter('first_name'));
  WRITELN('Last Name: ', GetQueryStringParameter('last_name'));
  WRITELN('Age: ', GetQueryStringParameter('age'))
END. {PrintHello}
