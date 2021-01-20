CREATE TABLE `test`.`gold_reply` ( 
 `GOLD_re_num` INT NULL AUTO_INCREMENT COMMENT '고유넘버' ,
 `GOLD_re_id` VARCHAR(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '글쓴이' , 
 `GOLD_re_cont` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '답글' , 
 `GOLD_re_wr_num` INT NOT NULL COMMENT '글 연결 번호' , PRIMARY KEY (`GOLD_re_num`)
) ENGINE = InnoDB;