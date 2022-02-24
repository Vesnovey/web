PROGRAM PrintHello(INPUT, OUTPUT);
USES
  Dos;

VAR
  m: INTEGER;
  S, Check: STRING;
  
BEGIN {PrintHello}
  WRITELN('Content-Type: text/html');
  WRITELN;
  S := (GetEnv('QUERY_STRING')); 
  Check := Copy(S, 1, 5);
  IF Check = 'name='
  THEN
    BEGIN
      m := length(S);
      WRITE('Hello Dear, ');
      WRITELN(Copy(S, 6, m))      
    END
  ELSE
    WRITELN('Hello Anonymous!')
END. {PrintHello}
