-- Ik was verveelt
CREATE DATABASE IF NOT EXISTS main;
USE main;

CREATE TABLE IF NOT EXISTS reviews (
    name    VARCHAR(50),
    rating  INTEGER  NOT NULL,
    header  VARCHAR(100),
    comment VARCHAR(1000) NOT NULL
);

INSERT INTO reviews(name, rating, header, comment) VALUES 
('Muriel Hayes',4,'Busy place, great food with plenty of choices.','Good portions and tasty. Reasonably priced. Staff were attentive and polite.'),
('Wanda Cross',3,'Different, but not great for this price.','The pizza is interesting in this place, but it is not great, and for the same price you could get a better meal elsewhere. The restaurant is small and seating is a bit cramped. Service is friendly.'),
('Joseph Burke',5,'The best pizza in Leiden.','I am a pizza addicted person and I have to say that the pizza here was marvelous. Incredible taste, the best I have ever eaten in my life.'),
('Tyler Noble',4,'Familie visit.','Good place for a spontanius visit with family. Service is quick, nothing fancy but friendly and nice. Food is good, simple and great in choise. Everything is fresh made in kitchen wich is open to see for clients.'),
('Alfie Davison',5,'Great spot!','Lovely food and service. Sun on the terrace, not crowded or busy. Great spot to have lunch with family or friends.'),
('Jillian Carpenter',3,'Large food portions cheap prices quality ok.','This is an average italian selling huge portions of every dish, side salads do not exist be warned portions are large too large in my opinion. The food whilst not bad was not the best italian ever, but good value nonetheless.'),
('Anthony Hoffman',2,'Odd','Interested to try here due to the rave reviews we had seen, however we found the entire experience a little odd. The place was empty and the service wasn''t speedy and definitely not enthusiastic. The food was ok, but not good enough to make up for the service. Certainly didn''t live up to the hype for us.'),
('Kay Jarvis',5,'Definitely will be back.','If you love pizza that''s the right place to eat!! Everything we tried was very delicious, fresh and good filled. Food was made and served very quickly and all the staff was very kind.'),
('Hadden Steele',3,'Not what we expected.','We came here with a lot of expectations. We had a lot of good comments about this place. The ambiance is poor despite it is a small place. The service is right with the right presence, not more not less.');

SELECT * FROM reviews;