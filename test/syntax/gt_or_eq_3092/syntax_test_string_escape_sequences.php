// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

$double_quoted = "\_\a\x\'A\x411\1011";
//                ^ -constant
//                 ^ -constant
//                  ^ -constant
//                   ^ -constant
//                    ^ -constant
//                     ^ -constant
//                      ^ -constant
//                       ^ -constant
//                        ^ -constant
//                             ^ -constant
//                                  ^ -constant

$double_quoted_escapes = "_\n_\r_\t_\\_\$_\"_\101_\x41_";
//                        ^ -constant
//                         ^ constant.character.escape
//                          ^ constant.character.escape
//                           ^ -constant
//                            ^ constant.character.escape
//                             ^ constant.character.escape
//                              ^ -constant
//                               ^ constant.character.escape
//                                ^ constant.character.escape
//                                 ^ -constant
//                                  ^ constant.character.escape
//                                   ^ constant.character.escape
//                                    ^ -constant
//                                     ^ constant.character.escape
//                                      ^ constant.character.escape
//                                       ^ -constant
//                                        ^ constant.character.escape
//                                         ^ constant.character.escape
//                                          ^ -constant
//                                           ^ constant.numeric.octal
//                                            ^ constant.numeric.octal
//                                             ^ constant.numeric.octal
//                                              ^ constant.numeric.octal
//                                               ^ -constant
//                                                ^ constant.numeric.hex
//                                                 ^ constant.numeric.hex
//                                                  ^ constant.numeric.hex
//                                                   ^ constant.numeric.hex
//                                                    ^ -constant

$double_quoted_escapes = "_\e_";
//                        ^ -constant
//                         ^ constant.character.escape
//                          ^ constant.character.escape
//                           ^ -constant

$double_quoted_escapes = "_\v_\f_";
//                        ^ -constant
//                         ^ constant.character.escape
//                          ^ constant.character.escape
//                           ^ -constant
//                            ^ constant.character.escape
//                             ^ constant.character.escape
//                              ^ -constant

$single_quoted = '\_\a\x\n\r\t\$\"\101\x41';
//                ^ -constant
//                 ^ -constant
//                  ^ -constant
//                   ^ -constant
//                    ^ -constant
//                     ^ -constant
//                      ^ -constant
//                       ^ -constant
//                        ^ -constant
//                         ^ -constant
//                          ^ -constant
//                           ^ -constant
//                            ^ -constant
//                             ^ -constant
//                              ^ -constant
//                               ^ -constant
//                                ^ -constant
//                                 ^ -constant
//                                  ^ -constant
//                                   ^ -constant
//                                    ^ -constant
//                                     ^ -constant
//                                      ^ -constant
//                                       ^ -constant
//                                        ^ -constant

$single_quoted_escapes = '_\'_\\_';
//                        ^ -constant
//                         ^ constant.character.escape
//                          ^ constant.character.escape
//                           ^ -constant
//                            ^ constant.character.escape
//                             ^ constant.character.escape
//                              ^ -constant
