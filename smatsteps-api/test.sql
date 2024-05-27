-- Recherche de l'utilisateur Smat par ID utilisateur et ID Smat
SELECT * FROM smat_users
WHERE user_id = :userId AND smat_id = :smatId
LIMIT 1;

-- Mise à jour du résultat Smat et du numéro de question actuel
UPDATE smat_users
SET result_smat = result_smat + :newScore,
    current_question = current_question + 1,
    current_points_max = current_points_max + :newCurrentPointsMax
WHERE user_id = :userId AND smat_id = :smatId;

-- Vérifier si tous les utilisateurs ont terminé toutes les questions
SELECT * FROM smat_users WHERE smat_id = :smatId;
SELECT * FROM smats WHERE id = :smatId;

-- Si tous les utilisateurs ont terminé, mettre à jour le statut du Smat
UPDATE smats
SET status = 3
WHERE id = :smatId;

-- Supprimer les questions associées au Smat
DELETE FROM question_smats
WHERE smat_id = :smatId;
