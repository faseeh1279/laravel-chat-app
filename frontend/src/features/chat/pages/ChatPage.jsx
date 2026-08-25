import ChatHeader from "../components/ChatHeader";
import MessageList from "../components/MessageList";
import MessageInput from "../components/MessageInput";

export const ChatPage = () => {
    return (
        <div className="min-vh-100 bg-light py-4">

            <div className="container">

                <div
                    className="card border-0 shadow-sm overflow-hidden"
                    style={{ height: "calc(100vh - 3rem)" }}
                >

                    <ChatHeader />

                    <MessageList />

                    <MessageInput />

                </div>

            </div>

        </div>
    );
};