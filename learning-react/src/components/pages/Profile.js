import { useContext } from "react";
import Context from "../Context"

export default function Profile() {

    const userData = useContext(Context)
      
    return (
        <>
            <img id="profilePic" src={userData.profilePic} alt="userProfilePic"></img>
            <h2>{userData.username}</h2>
        </>
    )
};