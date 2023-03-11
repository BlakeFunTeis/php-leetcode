SELECT ad1.actor_id, ad1.director_id
FROM ActorDirector ad1
JOIN ActorDirector ad2 ON ad1.actor_id = ad2.actor_id AND ad1.director_id = ad2.director_id
JOIN ActorDirector ad3 ON ad1.actor_id = ad3.actor_id AND ad1.director_id = ad3.director_id
WHERE ad1.timestamp < ad2.timestamp AND ad2.timestamp < ad3.timestamp
GROUP BY ad1.actor_id, ad1.director_id
HAVING COUNT(*) >= 3;

