package GUIposts;

import models.Comment;
import models.Post;
import Service.CommentService;
import Service.PostService;
import java.io.IOException;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Alert;
import javafx.scene.control.TextField;

import java.net.URL;
import java.util.ResourceBundle;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;

public class AddACommentController implements Initializable {

    @FXML
    private TextField commentTextField;

    private CommentService commentService;
    private PostService postService;

    private int id_post;
    private int id_user;

    @Override
    public void initialize(URL url, ResourceBundle resourceBundle) {
       commentService = new CommentService();
        postService = new PostService();
    }

    @FXML
    void addComment(ActionEvent event) throws IOException {
        // Check if comment text field is not empty
        if (commentTextField.getText().isEmpty()) {
            // Show an alert if the comment field is empty
            Alert alert = new Alert(Alert.AlertType.ERROR);
            alert.setTitle("Error");
            alert.setHeaderText("Missing comment");
            alert.setContentText("Please enter a comment.");
            alert.showAndWait();
            return;
        }

        Comment comment = new Comment();
        comment.setComment(commentTextField.getText());
        comment.setId_user(id_user);

        Post post = postService.getPostById(id_post);
        comment.setPost_c(post);

        commentService.addComment(comment);

        // Show a confirmation alert
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Success");
        alert.setHeaderText("Comment added");
        alert.setContentText("The comment was successfully added.");
        alert.showAndWait();
        FXMLLoader loader = new FXMLLoader(getClass().getResource("/GUIposts/VueCommentPost.fxml"));
                Parent root = loader.load();
                VueCommentPostController controller = loader.getController();
                controller.setId_post(post.getId_post()); // set the postId in the VueCommentPostController instance

                Scene scene = new Scene(root);
                Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
                stage.setScene(scene);
                stage.show();  
    }

    public void setId_post(int id_post) {
        this.id_post = id_post;
    }

    public void setId_user(int id_user) {
        this.id_user = id_user;
    }
}