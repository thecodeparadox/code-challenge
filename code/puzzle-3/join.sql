#
# TEST 1
# When `ONLY_FULL_GROUP_BY` ENABLED
#
SELECT
  `user`.`*`
  , AVG(test_result.correct) avg_correct
  , MAX(test_result.time_taken) recent_test_time
FROM
  `user`
LEFT JOIN
  test_result ON test_result.user_id = `user`.`user_id`
GROUP BY
  `user`.`user_id`, `user`.`first_name`, `user`.`last_name`


###############################################################################################


#
# TEST 2
# When `ONLY_FULL_GROUP_BY` DISABLE
# SET GLOBAL sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));
# OR
# SET GLOBAL sql_mode='';
#
SELECT
  `user`.`*`
  , AVG(test_result.correct) avg_correct
  , MAX(test_result.time_taken) recent_test_time
FROM
  `user`
LEFT JOIN
  test_result ON test_result.user_id = `user`.`user_id`
GROUP BY
  `user`.`user_id`;


###############################################################################################


#
# TEST 3
# Using Sub-Query
#
SELECT
  `user`.`*`,
  t_result.avg_correct,
  t_result.recent_test_time
FROM
  `user`
LEFT JOIN
  (
  SELECT
    user_id
    , AVG(correct) avg_correct
    , MAX(time_taken) recent_test_time
  FROM
    test_result
  GROUP BY
    test_result.user_id
) t_result ON t_result.user_id = `user`.`user_id`
ORDER BY
  `user`.`user_id`;