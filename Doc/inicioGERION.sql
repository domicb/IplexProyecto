INSERT INTO `2daw1516_domingo01`.`invitacion`
(`idinvitacion`,
`cod_invi`)
VALUES
(201,
'AokRehZx');

INSERT INTO `2daw1516_domingo01`.`plan`
(`idplan`,
`nombre`,
`precio`)
VALUES
(201,
'basico',
9),
(202,
'medio',
12),
(203,
'premium',
15);


INSERT INTO `2daw1516_domingo01`.`usuario`
(`idusuario`,
`username`,
`password`,
`acumulado`,
`invitacion_idinvitacion`,
`plan_idplan`)
VALUES
(NULL,
'serujio',
'ed7b1f7434e8791bda81927f6e57ddf5',
0,
201,
201);

INSERT INTO `2daw1516_domingo01`.`usuario`
(`idusuario`,
`username`,
`password`,
`acumulado`,
`invitacion_idinvitacion`,
`plan_idplan`)
VALUES
(NULL,'9cdfb439c7876e703e307864c9167a15',
'domicb',
'ed7b1f7434e8791bda81927f6e57ddf5',
0,
201,
201);
