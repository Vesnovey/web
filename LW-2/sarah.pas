PROGRAM PrintHello(INPUT, OUTPUT);
USES
  Dos;
BEGIN {PrintHello}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN(GetEnv('QUERY_STRING'));
  IF (GetEnv('QUERY_STRING')) = 'lanterns=1'
  THEN
    WRITELN('LAND')
  ELSE
    IF (GetEnv('QUERY_STRING')) = 'lanterns=2'
    THEN
      WRITELN('Sea')
  ELSE
    WRITELN('Sarah is impostor')
END. {PrintHello}
